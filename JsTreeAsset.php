<?php
namespace dxapp\themes\inspinia;

/**
 * Class JsTreeAsset
 *
 * Demo: tree_view.html
 * @package dxapp\themes\inspinia
 */
class JsTreeAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/jsTree/style.min.css'
    ];    
    public $js = [
        'js/plugins/jsTree/jstree.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}