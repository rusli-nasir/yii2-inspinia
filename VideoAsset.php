<?php
namespace dxapp\themes\inspinia;

/**
 * Class VideoAsset
 *
 * Demo: video.html
 * @package dxapp\themes\inspinia
 */
class VideoAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/video/responsible-video.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}