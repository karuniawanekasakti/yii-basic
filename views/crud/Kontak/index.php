<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\crud\KontakSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kontaks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kontak-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kontak', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kontak',
            'nama',
            'perusahaan',
            'jabatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kontak $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kontak' => $model->id_kontak]);
                 }
            ],
        ],
    ]); ?>


</div>
