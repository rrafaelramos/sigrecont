<?php

use app\models\DBUser;
use app\models\User;
use yii\bootstrap\Dropdown;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use yii\helpers\ArrayHelper;
use kartik\datecontrol\Module;

/* @var $this yii\web\View */
/* @var $model app\models\Clienteavulso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clienteavulso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cpf')->widget(\yii\widgets\MaskedInput::className(),[
        'mask' => '999.999.999-99'
    ]) ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero')->textInput() ?>

    <?= $form->field($model, 'rua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bairro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cep')->widget(\yii\widgets\MaskedInput::className(),[
        'mask' => '99999-999'
    ]) ?>

    <?= $form->field($model, 'uf')->dropDownList(['prompt' => 'Selecione um Estado',
        'AC' => 'AC',
        'AL' => 'AL',
        'AM' => 'AM',
        'AP' => 'AP',
        'BA' => 'BA',
        'CE' => 'CE',
        'DF' => 'DF',
        'ES' => 'ES',
        'GO' => 'GO',
        'MA' => 'MA',
        'MG' => 'MG',
        'MS' => 'MS',
        'MT' => 'MT',
        'PA' => 'PA',
        'PB' => 'PB',
        'PE' => 'PE',
        'PI' => 'PI',
        'PR' => 'PR',
        'RJ' => 'RJ',
        'RN' => 'RN',
        'RO' => 'RO',
        'RR' => 'RR',
        'RS' => 'RS',
        'SC' => 'SC',
        'SE' => 'SE',
        'SP' => 'SP',
        'TO' => 'TO']) ?>

    <?= $form->field($model, 'rotina')->textInput() ?>

    <?=
    $form->field($model, 'datanascimento')->widget(DateControl::classname(), [
        'type'=>DateControl::FORMAT_DATE,
        'widgetOptions' => [
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'usuario_fk')->dropDownList(ArrayHelper::map(DBUser::find()->where(['nome' => yii::$app->session])
    ->all(), 'id','nome'));?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
