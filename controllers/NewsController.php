<?php 
	namespace  app\controllers;

	use Yii;
	use yii\web\Controller;

	class NewsController extends Controller{
		public function actionIndex(){
			echo "this is my first controller ";
		}

		public function actionAbout(){
			return $this->render("about");
		}

		public function dataItem(){
			$newsList = [
				['title' => 'World War' , 'time' => '1914'],
				['title' => '2nd World War' , 'time' => '1939'],
				['title' => 'First man on the moon','time' => '1969']
			];
			return $newsList;
		}

		public function actionItemList(){
			return $this->render('itemList',['model' => $this->dataItem()]);
		}
	}
 ?>