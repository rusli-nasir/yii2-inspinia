<?php
namespace dxapp\themes\inspinia;

/**
 * Class SlickAsset
 *
 * Demo: slick_carousel.html
 * @package dxapp\themes\inspinia
 */
class SlickAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/slick/slick.css',
        'css/plugins/slick/slick-theme.css'
    ];
    public $js = [
        'js/plugins/slick/slick.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}