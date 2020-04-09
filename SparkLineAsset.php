<?php
namespace dxapp\themes\inspinia;

/**
 * Class SparkLineAsset
 *
 * Demo: graph_sparkline.html
 * @package dxapp\themes\inspinia
 */
class SparkLineAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/sparkline/jquery.sparkline.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}