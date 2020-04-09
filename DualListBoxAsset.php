<?php
namespace dxapp\themes\inspinia;

/**
 * Class DualListBoxAsset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class DualListBoxAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/dualListbox/bootstrap-duallistbox.min.css'
    ];
    public $js = [
        'js/plugins/dualListbox/jquery.bootstrap-duallistbox.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}