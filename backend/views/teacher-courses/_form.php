<?php

use common\models\Courses;
use common\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\TeacherCourses $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="teacher-courses-form">

    <?php $form = ActiveForm::begin(); 
    $courses = Courses::find()->all();
    $users = User::find()->all();
    ?>

    <?= $form->field($model, 'user_id')->dropDownList(array_column($users, 'username', 'id')) ?>

    <?= $form->field($model, 'course_id')->dropDownList(array_column($courses, 'name', 'id')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
