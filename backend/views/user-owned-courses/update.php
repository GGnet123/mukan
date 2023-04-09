<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\UserOwnedCourses $model */

$this->title = 'Update User Owned Courses: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Owned Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-owned-courses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
