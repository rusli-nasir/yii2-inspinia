<?php
namespace dxapp\themes\inspinia;

/**
 * Class JsKnobAsset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class JsKnobAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/jsKnob/jquery.knob.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}