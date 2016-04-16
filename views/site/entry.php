<?php 
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>

<?php 
	$form = ActiveForm::begin(); ?>

<?= $form->field($model,"name")->label("ten cua may !"); ?>

<?= $form->field($model,"email")->label("dia chi mail cua may ! ") ?>

<div class="form-group" >
<?= Html::submitButton("submit",["class" => "btn btn-primary"]); ?>
</div>

<?php ActiveForm::end() ;?>