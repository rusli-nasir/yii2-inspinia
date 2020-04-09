<?php
namespace dxapp\themes\inspinia;

/**
 * Class IdleTimerAsset
 *
 * Demo: idle_timer.html
 * @package dxapp\themes\inspinia
 */
class IdleTimerAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/idle-timer/idle-timer.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}