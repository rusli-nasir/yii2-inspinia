<?php
namespace dxapp\themes\inspinia;

/**
 * Class DotDotDotAsset
 *
 * Demo: truncate.html
 * @package dxapp\themes\inspinia
 */
class DotDotDotAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/daterangepicker/daterangepicker-bs3.css'
    ];
    public $js = [
        'js/plugins/dotdotdot/jquery.dotdotdot.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}