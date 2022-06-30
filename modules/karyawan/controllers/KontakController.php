<?php

namespace app\modules\karyawan\controllers;

use app\modules\karyawan\models\Kontak;
use app\modules\karyawan\models\KontakSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KontakController implements the CRUD actions for Kontak model.
 */
class KontakController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Kontak models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KontakSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kontak model.
     * @param int $id_kontak Id Kontak
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_kontak)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_kontak),
        ]);
    }

    /**
     * Creates a new Kontak model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Kontak();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_kontak' => $model->id_kontak]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kontak model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_kontak Id Kontak
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_kontak)
    {
        $model = $this->findModel($id_kontak);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_kontak' => $model->id_kontak]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kontak model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_kontak Id Kontak
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_kontak)
    {
        $this->findModel($id_kontak)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kontak model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_kontak Id Kontak
     * @return Kontak the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_kontak)
    {
        if (($model = Kontak::findOne(['id_kontak' => $id_kontak])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
