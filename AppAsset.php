<?php

namespace dxapp\themes\inspinia;


class AppAsset extends BaseAsset
{
    public $sourcePath = '@vendor/rusli-nasir/yii2-inspinia/assets';
    public $css = [
        'css/animate.css',
        'css/style.css'
    ];
    public $js = [
        'js/plugins/metisMenu/jquery.metisMenu.js',
        'js/plugins/slimscroll/jquery.slimscroll.min.js',
        'js/inspinia.js',
        'js/plugins/pace/pace.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'dxapp\themes\inspinia\FontawesomeAsset'
    ];

}
