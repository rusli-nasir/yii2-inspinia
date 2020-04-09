<?php
namespace dxapp\themes\inspinia;

/**
 * Class DateRangePickerAsset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class DateRangePickerAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
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