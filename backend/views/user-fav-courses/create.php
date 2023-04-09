<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\UserFavCourses $model */

$this->title = 'Create User Fav Courses';
$this->params['breadcrumbs'][] = ['label' => 'User Fav Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-fav-courses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
