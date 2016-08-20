<?php
/**
 * Created by PhpStorm.
 * User: M.Akbari
 * Date: 8/17/2016
 * Time: 10:30 PM
 */
namespace mehrdadakbari\prayerTime;

use yii\base\Action;
use Yii;

class PrayerAction extends Action{
    public $citiesList = [];
    public function run(){
        $this->citiesList = Require('citiesList.php');
        $province = Yii::$app->request->post('province');
        $citiesOfProvince = $this->citiesList[$province];
        foreach ($citiesOfProvince as $key => $val) {
            $data[] = $key;
        }
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $data;
    }
} 