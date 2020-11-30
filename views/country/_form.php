<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Country */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="country-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'time')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Age')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Weight')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Growth')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
