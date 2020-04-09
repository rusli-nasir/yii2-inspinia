<?php
namespace dxapp\themes\inspinia;

/**
 * Class DataPickerAsset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class DataPickerAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/datapicker/datepicker3.css'
    ];
    public $js = [
        'js/plugins/datapicker/bootstrap-datepicker.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}