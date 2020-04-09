<?php
namespace dxapp\themes\inspinia;

/**
 * Class SweetAlertAsset
 *
 * Demo: sweetalert.html
 * @package dxapp\themes\inspinia
 */
class SweetAlertAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
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