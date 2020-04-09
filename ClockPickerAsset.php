<?php
namespace dxapp\themes\inspinia;

/**
 * Class ClockPickerAsset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class ClockPickerAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/clockpicker/clockpicker.css'
    ];
    public $js = [
        'js/plugins/clockpicker/clockpicker.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}