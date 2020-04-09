<?php
namespace dxapp\themes\inspinia;

/**
 * Class IonRangeSliderAsset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class IonRangeSliderAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/ionRangeSlider/ion.rangeSlider.css',
        'css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css'
    ];    
    public $js = [
        'js/plugins/ionRangeSlider/ion.rangeSlider.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}