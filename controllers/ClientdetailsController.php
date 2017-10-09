<?php 

namespace app\controllers;

use yii\rest\ActiveController;

class ClientdetailsController extends ActiveController{
    public $modelClass = "app\models\Clientdetails";
    
    
    public function actionCreate() {
        $params = yii::$app->request->post();

        $model = new \app\models\Clientdetails();
        $model->attributes = $params;
        if ($model->save()) {
            $this->setHeader(200);
            echo json_encode(array('status' => 1, 'data' => array_filter($model->attributes)), JSON_PRETTY_PRINT);
        } else {
            $this->setHeader(400);
            echo json_encode(array('status' => 0, 'error_code' => 400, 'errors' => $model->errors), JSON_PRETTY_PRINT);
        }
    }

}