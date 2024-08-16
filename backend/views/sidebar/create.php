<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Sidebar $model */

$this->title = Yii::t('app', 'Create Sidebar');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sidebars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sidebar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
