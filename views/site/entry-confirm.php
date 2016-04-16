<?php 
	use yii\helpers\Html;

?>

<p>
	You have entered the following infomation : 
</p>

<ul>
	<li><label>name:</label><?= Html::encode($model->name) ?></li>
	<li><label>Email:</label><?=Html::encode($model->email)?></li>
</ul>
