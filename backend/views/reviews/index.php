<?php

use common\models\Courses;
use common\models\Reviews;
use common\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\ReviewsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Reviews';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviews-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Reviews', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'rating',
            'text:ntext',
            [
                'attribute' => 'user',
                'value' => function($model) {
                    $user = User::findOne($model->user_id);
                    return $user ? $user->username : 'Не найден';
                }
            ],
            [
                'attribute' => 'course',
                'value' => function($model) {
                    $course = Courses::findOne($model->course_id);
                    return $course ? $course->name : 'Не найден';
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Reviews $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
