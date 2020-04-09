<?php
namespace dxapp\themes\inspinia;

/**
 * Class ToastrAsset
 *
 * Demo: toastr_notifications.html
 * @package dxapp\themes\inspinia
 */
class ToastrAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/toastr/toastr.min.css'
    ];
    public $js = [
        'js/plugins/toastr/toastr.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}