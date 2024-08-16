<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Page;
use mihaildev\ckeditor\CKEditor;

/** @var yii\web\View $this */
/** @var common\models\Page $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'content_uz')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]); ?>

    <?= $form->field($model, 'comtent_ru')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]); ?>

    <?= $form->field($model, 'content_en')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]); ?>

    <?= $form->field($model, 'child_category_id')->dropDownList(ArrayHelper::map(Page::find()->all(),'id','name_uz')) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
