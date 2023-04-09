<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\UserOwnedCourses $model */

$this->title = 'Create User Owned Courses';
$this->params['breadcrumbs'][] = ['label' => 'User Owned Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-owned-courses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
