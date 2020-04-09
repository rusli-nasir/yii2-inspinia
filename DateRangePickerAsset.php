<?php
namespace dxapp\themes\inspinia;

/**
 * Class DateRangePickerAsset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class DateRangePickerAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/daterangepicker/daterangepicker-bs3.css'
    ];
    public $js = [
        'js/plugins/daterangepicker/daterangepicker.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}