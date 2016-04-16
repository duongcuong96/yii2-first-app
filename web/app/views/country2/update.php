<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Country2 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Country2',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Country2s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->code]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="country2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
