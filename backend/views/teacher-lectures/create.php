<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TeacherLectures $model */

$this->title = 'Create Teacher Lectures';
$this->params['breadcrumbs'][] = ['label' => 'Teacher Lectures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-lectures-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
