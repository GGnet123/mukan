<?php
namespace backend\controllers;

use common\models\Courses;
use common\models\Lectures;
use common\models\User;
use yii\rest\Controller;
use yii\base\Request;

class ApiController extends Controller {
    public function beforeAction($action)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        return parent::beforeAction($action);
    }
    
    public function actionLogin(Request $request) {
        $data = $request->post();

        $user = User::find()->where(['username' => $data['username']])->one();
       
        if ($user && $user->validatePassword($data['password'])) {
            return [
                'success' => true,
                'api_key' => $user->auth_key,
                'user' => $user
            ];
        }
        return ['success' => false];
    }

    public function actionReg(Request $request) {
        $data = $request->post();

        $exists = User::find()->where(['username' => $data['username']])->one();
        if ($exists) {
            return [
                'success' => false,
                'error' => 'Username already exists'
            ];
        }
        $user = new User([
            'username' => $data['username'],
            'email' => $data['email'],
            'is_teacher' => $data['is_teacher'],
            'is_admin' => $data['is_admin'],
        ]);
        $user->setPassword($data['password']);
        $user->generateAuthKey();

        return ['success' => $user->save()];
    }

    public function actionGetCoursesList($limit = 10, $offset = 0) {
        $courses = Courses::find()->limit($limit)->offset($offset)->all();

        return [
            'success' => true,
            'data' => $courses
        ];
    }

    public function actionGetCourseDetails($id) {
        $course = Courses::find()->where(['id' => $id])->one();

        return [
            'success' => true,
            'data' => $course
        ];
    }

    public function actionGetCourseContents($id) {
        $lectures = Lectures::find()->where(['course_id' => $id])->all();

        return [
            'success' => true,
            'data' => $lectures
        ];
    }
}