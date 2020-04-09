<?php
namespace dxapp\themes\inspinia;

/**
 * Class SwitcheryAsset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class SwitcheryAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/switchery/switchery.css'
    ];
    public $js = [
        'js/plugins/switchery/switchery.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}