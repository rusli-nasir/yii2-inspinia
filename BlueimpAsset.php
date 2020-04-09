<?php
namespace dxapp\themes\inspinia;

/**
 * Class BlueimpAsset
 *
 * Demo: basic_gallery.html
 * @package dxapp\themes\inspinia
 */
class BlueimpAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/blueimp/css/blueimp-gallery.min.css'
    ];
    public $js = [
        'js/plugins/blueimp/jquery.blueimp-gallery.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}