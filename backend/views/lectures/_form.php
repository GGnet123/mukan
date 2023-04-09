<?php

use common\models\Courses;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Lectures $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="lectures-form">

    <?php 
    $form = ActiveForm::begin(); 
    $courses = Courses::find()->all();
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_id')->dropDownList(array_column($courses, 'name', 'id')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
