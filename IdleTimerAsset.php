<?php
namespace dxapp\themes\inspinia;

/**
 * Class IdleTimerAsset
 *
 * Demo: idle_timer.html
 * @package dxapp\themes\inspinia
 */
class IdleTimerAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/idle-timer/idle-timer.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}