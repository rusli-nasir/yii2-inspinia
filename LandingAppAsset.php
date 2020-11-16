<?php

namespace dxapp\themes\inspinia;


class LandingAppAsset extends BaseAsset
{
    public $css = [
        'css/animate.css',
        'css/style.css'
    ];
    public $js = [
        'js/plugins/pace/pace.min.js',
        'js/plugins/classie/classie.js',
        'js/plugins/animated-header/cbpAnimatedHeader.js',
        'js/plugins/wow/wow.min.js',
        'js/inspinia.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'dxapp\themes\inspinia\FontawesomeAsset'
    ];

}
