<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Inquiry $model */

$this->title = Yii::t('app', 'Create Inquiry');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Inquiries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inquiry-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
