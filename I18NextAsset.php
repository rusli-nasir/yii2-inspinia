<?php
namespace dxapp\themes\inspinia;

/**
 * Class I18NextAsset
 *
 * Demo: i18support.html
 * @package dxapp\themes\inspinia
 */
class I18NextAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/i18next/i18next.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}