<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Lectures $model */

$this->title = 'Create Lectures';
$this->params['breadcrumbs'][] = ['label' => 'Lectures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lectures-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
