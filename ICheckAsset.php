<?php
namespace dxapp\themes\inspinia;

/**
 * Class ICheckAsset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class ICheckAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/iCheck/custom.css'
    ];
    public $js = [
        'js/plugins/iCheck/icheck.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}