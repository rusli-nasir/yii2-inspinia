<?php
namespace dxapp\themes\inspinia;

/**
 * Class NousliderAsset
 *
 * Demo: tree_view.html
 * @package dxapp\themes\inspinia
 */
class NousliderAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/nouslider/jquery.nouislider.css'
    ];    
    public $js = [
        'js/plugins/nouslider/jquery.nouislider.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}