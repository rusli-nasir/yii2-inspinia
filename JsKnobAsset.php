<?php
namespace dxapp\themes\inspinia;

/**
 * Class JsKnobAsset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class JsKnobAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/jsKnob/jquery.knob.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}