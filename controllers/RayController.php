<?php

namespace app\controllers;
use app\models\User;
use yii\db\ActiveRecord;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Rey;

class RayController extends Controller
{
    public function actionShow(){
        $models =  User::find()->orderBy('ball DESC')->all();
        $part =  User::find()->orderBy('part_ball DESC')->all();
        return $this->render('ray',['someData'=>$models,'somePar'=>$part]);
    }
}
