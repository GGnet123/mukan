<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TeacherCourses $model */

$this->title = 'Update Teacher Courses: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Teacher Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teacher-courses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
