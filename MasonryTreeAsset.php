<?php
namespace dxapp\themes\inspinia;

/**
 * Class MasonryTreeAsset
 *
 * Demo: masonry.html
 * @package dxapp\themes\inspinia
 */
class MasonryTreeAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/masonary/masonry.pkgd.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}