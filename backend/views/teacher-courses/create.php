<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TeacherCourses $model */

$this->title = 'Create Teacher Courses';
$this->params['breadcrumbs'][] = ['label' => 'Teacher Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-courses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
