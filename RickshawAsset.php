<?php
namespace dxapp\themes\inspinia;

/**
 * Class RickshawAsset
 *
 * Demo: graph_rickshaw.html
 * @package dxapp\themes\inspinia
 */
class RickshawAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/rickshaw/vendor/d3.v3.js',
        'js/plugins/rickshaw/rickshaw.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}