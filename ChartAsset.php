<?php
namespace dxapp\themes\inspinia;

/**
 * Class ChartAsset
 *
 * Demo: graph_chartjs.html
 * @package dxapp\themes\inspinia
 */
class ChartAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/chartJs/Chart.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}