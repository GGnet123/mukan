<?php

use common\models\UserFavCourses;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\UserFavCourses $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'User Fav Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-fav-courses-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User Fav Courses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'course_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UserFavCourses $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
