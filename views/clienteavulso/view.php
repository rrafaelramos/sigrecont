<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clienteavulso */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Clienteavulsos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="clienteavulso-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Deseja Realmente excluir este registro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cpf',
            'nome',
            'telefone',
            'numero',
            'rua',
            'bairro',
            'cidade',
            'cep',
            'uf',
            'rotina',
            ['attribute' => 'datanascimento',
                'format' => ['date', 'php:d/m/Y'],
            ],
            'usuario_fk',
        ],
    ]) ?>

</div>
