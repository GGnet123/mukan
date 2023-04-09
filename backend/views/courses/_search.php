<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\search\CoursesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="courses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'main_image') ?>

    <?= $form->field($model, 'details') ?>

    <?= $form->field($model, 'lecture_amount_counter') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'start_date') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'theme') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
