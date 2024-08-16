<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception*/

use yii\helpers\Html;

$this->title = $name;
?>



<div class="error-page container">
    <div class="col-md-8 col-12 offset-md-2">
        <div class="text-center">
            <img class="img-error" src="<?= Yii::$app->request->baseUrl ?>/img/error-404.svg" alt="Not Found">

            <h1 class="error-title">NOT FOUND</h1>
            <p class='fs-5 text-gray-600'>The page you are looking not found.</p>
            <a href="<?= \yii\helpers\Url::to(['/'])?>" class="btn btn-lg btn-outline-primary mt-3">Ortga qaytish</a>
        </div>
    </div>
</div>




