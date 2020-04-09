<?php
namespace dxapp\themes\inspinia;

/**
 * Class Select2Asset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class Select2Asset extends BaseAsset
{
    
    public $css = [
        'css/plugins/select2/select2.min.css'
    ];
    public $js = [
        'js/plugins/select2/select2.full.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}