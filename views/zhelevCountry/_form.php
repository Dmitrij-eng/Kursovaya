<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\zhelev */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zhelev-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Fename')->textInput() ?>

    <?= $form->field($model, 'Age')->textInput() ?>

    <?= $form->field($model, 'Weight')->textInput() ?>

    <?= $form->field($model, 'Growth')->textInput() ?>

    <?= $form->field($model, 'Time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
