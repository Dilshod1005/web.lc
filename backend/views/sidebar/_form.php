<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Sidebar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sidebar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_en')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
