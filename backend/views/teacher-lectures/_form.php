<?php

use common\models\Lectures;
use common\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\TeacherLectures $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="teacher-lectures-form">

    <?php $form = ActiveForm::begin(); 
    $lectures = Lectures::find()->all();
    $users = User::find()->all();
    ?>

    <?= $form->field($model, 'user_id')->dropDownList(array_column($users, 'username', 'id')) ?>

    <?= $form->field($model, 'lecture_id')->dropDownList(array_column($lectures, 'name', 'id')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
