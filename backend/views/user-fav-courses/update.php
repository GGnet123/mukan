<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\UserFavCourses $model */

$this->title = 'Update User Fav Courses: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Fav Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-fav-courses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
