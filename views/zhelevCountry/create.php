<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\zhelev */

$this->title = 'Create Zhelev';
$this->params['breadcrumbs'][] = ['label' => 'Zhelevs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zhelev-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
