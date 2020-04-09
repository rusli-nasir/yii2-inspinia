<?php
namespace dxapp\themes\inspinia;

/**
 * Class NestableAsset
 *
 * Demo: nestable_list.html
 * @package dxapp\themes\inspinia
 */
class NestableAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/nestable/jquery.nestable.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}