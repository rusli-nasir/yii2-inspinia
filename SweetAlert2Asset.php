<?php
namespace dxapp\themes\inspinia;

/**
 * Class SweetAlert2Asset
 *
 * Demo: sweetalert.html
 * @package dxapp\themes\inspinia
 */
class SweetAlert2Asset extends BaseAsset
{
    
    public $css = [
        'css/plugins/\sweetalert_2/sweetalert2.min.css'
    ];
    public $js = [
        'js/plugins/\sweetalert_2/sweetalert2.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}