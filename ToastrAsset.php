<?php
namespace dxapp\themes\inspinia;

/**
 * Class ToastrAsset
 *
 * Demo: toastr_notifications.html
 * @package dxapp\themes\inspinia
 */
class ToastrAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/toastr/toastr.min.css'
    ];
    public $js = [
        'js/plugins/toastr/toastr.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}