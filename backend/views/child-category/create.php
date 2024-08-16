<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ChildCategory $model */

$this->title = Yii::t('app', 'Create Child Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Child Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
