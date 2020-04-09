<?php
namespace dxapp\themes\inspinia;

/**
 * Class StepsAsset
 *
 * Demo: form_wizard.html
 * @package dxapp\themes\inspinia
 */
class StepsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/steps/jquery.steps.css'
    ];
    public $js = [
        'js/plugins/steps/jquery.steps.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}