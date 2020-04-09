<?php
namespace dxapp\themes\inspinia;

/**
 * Class ChartistAsset
 *
 * Demo: graph_chartist.html
 * @package dxapp\themes\inspinia
 */
class ChartistAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/chartist/chartist.min.css'
    ];    
    public $js = [
        'js/plugins/chartist/chartist.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}