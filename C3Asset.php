<?php
namespace dxapp\themes\inspinia;

/**
 * Class C3Asset
 *
 * Demo: c3.html
 * @package dxapp\themes\inspinia
 */
class C3Asset extends BaseAsset
{
    
    public $css = [
        'css/plugins/c3/c3.min.css'
    ];
    public $js = [
        'js/plugins/d3/d3.min.js',
        'js/plugins/c3/c3.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}