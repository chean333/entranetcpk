<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KnowledgeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'คลังความรู้ โรงพยาบาลไชยปราการ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="knowledge-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('สร้างงานที่นี้', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',                 ซ่อนตัวโชว์ หน้าแต่มีเนื้อหาข้างใน
            'name',
            //'knowledge',          ซ่อนตัวโชว์ หน้าแต่มีเนื้อหาข้างใน

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
