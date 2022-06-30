<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\crud\models\Kontak */

$this->title = $model->id_kontak;
$this->params['breadcrumbs'][] = ['label' => 'Kontaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kontak-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_kontak' => $model->id_kontak], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_kontak' => $model->id_kontak], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kontak',
            'nama',
            'perusahaan',
            'jabatan',
        ],
    ]) ?>

</div>
