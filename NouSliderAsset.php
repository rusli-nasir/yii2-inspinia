<?php
namespace dxapp\themes\inspinia;

/**
 * Class NousliderAsset
 *
 * Demo: tree_view.html
 * @package dxapp\themes\inspinia
 */
class NousliderAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/nouslider/jquery.nouislider.css'
    ];    
    public $js = [
        'js/plugins/nouslider/jquery.nouislider.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}