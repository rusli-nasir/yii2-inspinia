<?php
namespace dxapp\themes\inspinia;

/**
 * Class BootstrapTagsInputAsset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class BootstrapTagsInputAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css'
    ];
    public $js = [
        'js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}