<?php
namespace dxapp\themes\inspinia;

/**
 * Class SweetAlertAsset
 *
 * Demo: sweetalert.html
 * @package dxapp\themes\inspinia
 */
class SweetAlertAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/sweetalert/sweetalert.css'
    ];
    public $js = [
        'js/plugins/sweetalert/sweetalert.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}