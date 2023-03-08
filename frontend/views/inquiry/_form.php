<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Inquiry $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inquiry-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true, 'required' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true, 'required' => true]) ?>

    <?= $form->field($model, 'identification_card_number')->textInput(['maxlength' => true, 'required' => true]) ?>

    <?= $form->field($model, 'telephone_no')->textInput(['maxlength' => true, 'required' => true, 'type' => 'tel']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'type' => 'email', 'required' => true]) ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true, 'required' => true]) ?>

    <?= $form->field($model, 'part_to_deal')->textarea(['rows' => 6]) ?>

    <?php $form->field($model, 'created_at')->textInput() ?>

    <?php $form->field($model, 'updated_at')->textInput() ?>

    <?php $form->field($model, 'created_by')->textInput() ?>

    <?php $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>