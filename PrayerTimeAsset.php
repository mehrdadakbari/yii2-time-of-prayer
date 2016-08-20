<?php
/**
 * Created by PhpStorm.
 * User: M.Akbari
 * Date: 8/11/2016
 * Time: 11:29 PM
 */
namespace mehrdadakbari\prayerTime;

use yii\web\AssetBundle;

/**
 * This declares the asset files required by Gii.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PrayerTimeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/mehrdadakbari/yii2-time-of-prayer/asset';
    public $css = [
        '/css/'
    ];
    public $js = [
        '/js/',
    ];
    public $data = [
      '/data/'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}