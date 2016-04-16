<?php

namespace app\controllers;

use Yii;
use app\models\Country2;
use app\models\Country2Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl; // phân quyền user , chỉ có 1 số loại user ms dc login 
use yii\data\Pagination;
/**
 * Country2Controller implements the CRUD actions for Country2 model.
 */
class Country2Controller extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            //ACF - acess control Filter 
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                //require login to user 
                    [
                         'allow' => true,
                         'actions' => ['login'],
                         'roles' => ['?']
                    ],
                    // neu login thanh cong thi ms cho xem / sua / xoa
                    [
                        'allow' => true,
                        'actions' => ['index','update','delete','create','view'],
                        'roles' => ['@']
                    ]
                ]
            ],
        ];
    }

    /**
     * Lists all Country2 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = Country2::find();
        $pagination = new Pagination([
            'defaultPageSize' => 20,
            'totalCount' => $query->count()
            ]);
        $searchModel = new Country2Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'pagination' => $pagination
        ]);
    }

    /**
     * Displays a single Country2 model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Country2 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Country2();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->code]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Country2 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->code]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Country2 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Country2 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Country2 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Country2::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
