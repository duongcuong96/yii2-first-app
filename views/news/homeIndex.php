<?php use yii\helpers\Html;?>
<?php use yii\web\LinkPagger ; ?>
<?php 
	foreach($models as $m){
		echo $m['title'] . "---" . $m['content'] . "---".$m['id'] ;
	}
?>
