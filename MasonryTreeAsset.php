<?php
namespace dxapp\themes\inspinia;

/**
 * Class MasonryTreeAsset
 *
 * Demo: masonry.html
 * @package dxapp\themes\inspinia
 */
class MasonryTreeAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/masonary/masonry.pkgd.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}