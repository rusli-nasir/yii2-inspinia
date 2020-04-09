<?php
namespace dxapp\themes\inspinia;

/**
 * Class I18NextAsset
 *
 * Demo: i18support.html
 * @package dxapp\themes\inspinia
 */
class I18NextAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/i18next/i18next.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}