<?php
namespace dxapp\themes\inspinia;

/**
 * Class CropperAsset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class CropperAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/cropper/cropper.min.css'
    ];
    public $js = [
        'js/plugins/cropper/cropper.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}