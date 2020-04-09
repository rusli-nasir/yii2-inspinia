<?php
namespace dxapp\themes\inspinia;

/**
 * Class ICheckAsset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class ICheckAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
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