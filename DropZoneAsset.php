<?php
namespace dxapp\themes\inspinia;

/**
 * Class DropZoneAsset
 *
 * Demo: form_file_upload.html
 * @package dxapp\themes\inspinia
 */
class DropZoneAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/dropzone/basic.css',
        'css/plugins/dropzone/dropzone.css'
    ];
    public $js = [
        'js/plugins/dropzone/dropzone.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}