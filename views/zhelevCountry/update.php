<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\zhelev */

$this->title = 'Update Zhelev: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Zhelevs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="zhelev-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
