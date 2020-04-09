<?php
namespace dxapp\themes\inspinia;

/**
 * Class TinyconAsset
 *
 * Demo: tinycon.html
 * @package dxapp\themes\inspinia
 */
class TinyconAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/tinycon/tinycon.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}