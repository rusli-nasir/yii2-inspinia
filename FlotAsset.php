<?php
namespace dxapp\themes\inspinia;

/**
 * Class FontawesomeAsset
 *
 * Demo: graph_flot.html widgets.html
 * @package dxapp\themes\inspinia
 */
class FlotAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/flot/jquery.flot.js',
        'js/plugins/flot/jquery.flot.tooltip.min.js',
        'js/plugins/flot/jquery.flot.resize.js',
        'js/plugins/flot/jquery.flot.pie.js',
        'js/plugins/flot/jquery.flot.symbol.js',
        'js/plugins/flot/jquery.flot.time.js',
        'js/plugins/flot/jquery.flot.spline.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}