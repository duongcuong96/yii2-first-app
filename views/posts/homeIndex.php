<?php
use yii\widgets\LinkPager;
use yii\helpers\BaseUrl;
$this->title = 'Home !';

$baseUrl = new BaseUrl();
$indexUrl = $baseUrl->toRoute("single");

?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
			<?php
			foreach ($models as $m): ?>
			            <div  class="col-lg-4">
			                <h2><a href="<?= $indexUrl . "&id=". $m->id ?>" title="<?= htmlentities($m['title']) ?>"><?=$m['title']?></a></h2>
			                <?php 
			                	if(strlen($m['content']) > 400 ){
			                		$excerpt = substr($m['content'], 0, 400);
			                		echo substr($excerpt, 0, strrpos($excerpt," ")) . " ...";
			                	}else echo $m['content'];
			                ?>
			                <a class="col-xs-12 margin-top-20 btn btn-default" href="<?= Yii::$app->urlManager->createUrl(["posts/single","id" => $m["id"] ]) ?>">xem thêm</a>
		                </div>
			<?php endforeach;?>
		</div>
	</div>

	<div class="text-center" style="font-style:normal;">
		<?php echo LinkPager::widget([
		    'pagination' => $pages,
		    'class' => 'text-center'
		]);
		?>
	</div>
</div>