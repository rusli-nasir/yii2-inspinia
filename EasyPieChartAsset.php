<?php
namespace dxapp\themes\inspinia;

/**
 * Class EasyPieChartAsset
 *
 * Demo: dashboard_2.html
 * @package dxapp\themes\inspinia
 */
class EasyPieChartAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/easypiechart/jquery.easypiechart.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}