<?php
namespace dxapp\themes\inspinia;

/**
 * Class EasyPieChartAsset
 *
 * Demo: dashboard_2.html
 * @package dxapp\themes\inspinia
 */
class EasyPieChartAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/easypiechart/jquery.easypiechart.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}