<?php
namespace dxapp\themes\inspinia;

/**
 * Class GritterAsset
 *
 * Demo: index.html
 * @package dxapp\themes\inspinia
 */
class GritterAsset extends BaseAsset
{
    
    public $css = [
        'js/plugins/gritter/jquery.gritter.css'
    ];
    public $js = [
        'js/plugins/gritter/jquery.gritter.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}