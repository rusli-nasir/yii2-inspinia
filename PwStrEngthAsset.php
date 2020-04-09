<?php
namespace dxapp\themes\inspinia;

/**
 * Class PwStrEngthAsset
 *
 * Demo: password_meter.html
 * @package dxapp\themes\inspinia
 */
class PwStrEngthAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/textSpinners/spinners.css'
    ];    
    public $js = [
        'js/plugins/pwstrength/pwstrength-bootstrap.min.js',
        'js/plugins/pwstrength/zxcvbn.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}