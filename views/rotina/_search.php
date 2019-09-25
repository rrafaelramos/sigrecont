<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RotinaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rotina-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'repeticao') ?>

    <?= $form->field($model, 'doc_entrega') ?>

    <?= $form->field($model, 'doc_busca') ?>

    <?php // echo $form->field($model, 'data_entrega') ?>

    <?php // echo $form->field($model, 'data_aviso') ?>

    <?php // echo $form->field($model, 'informacao') ?>

    <?php // echo $form->field($model, 'msg_aviso') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
