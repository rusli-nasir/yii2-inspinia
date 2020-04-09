<?php
namespace dxapp\themes\inspinia;

/**
 * Class TinyconAsset
 *
 * Demo: tinycon.html
 * @package dxapp\themes\inspinia
 */
class TinyconAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/tinycon/tinycon.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}