<?php
namespace dxapp\themes\inspinia;

/**
 * Class MorrisAsset
 *
 * Demo: graph_morris.html
 * @package dxapp\themes\inspinia
 */
class MorrisAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/morris/morris-0.4.3.min.css'
    ];    
    public $js = [
        'js/plugins/morris/raphael-2.1.0.min.js',
        'js/plugins/morris/morris.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}