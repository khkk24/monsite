<?php

namespace app\controllers;

use app\models\CadastroModel;
use yii\base\Controller;
// use yii\rest\ActiveController;
// use linslin\yii2\curl;

class ExoController extends Controller
{
    public function actionFormulario()
    {
        $cadastroModel = new CadastroModel;
        $post = \Yii::$app->request->post();

        if($cadastroModel->load($post) && $cadastroModel->validate())
        {
            return $this->render('formulario-confirmacao', 
            [
                'model' => $cadastroModel
            ]);
        }

        return $this->render('formulario', 
        [
            'model' => $cadastroModel
        ]);
    }
}