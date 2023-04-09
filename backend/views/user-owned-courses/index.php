<?php

use common\models\UserOwnedCourses;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\UserOwnedCourses $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'User Owned Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-owned-courses-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User Owned Courses', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, UserOwnedCourses $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
