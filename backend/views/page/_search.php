<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\search\PageSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="page-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title_uz') ?>

    <?= $form->field($model, 'title_ru') ?>

    <?= $form->field($model, 'title_en') ?>

    <?= $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'view') ?>

    <?php // echo $form->field($model, 'content_uz') ?>

    <?php // echo $form->field($model, 'comtent_ru') ?>

    <?php // echo $form->field($model, 'content_en') ?>

    <?php // echo $form->field($model, 'child_category_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
