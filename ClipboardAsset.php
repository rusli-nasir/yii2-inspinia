<?php
namespace dxapp\themes\inspinia;

/**
 * Class ClipboardAsset
 *
 * Demo: clipboard.html
 * @package dxapp\themes\inspinia
 */
class ClipboardAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/clipboard/clipboard.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}