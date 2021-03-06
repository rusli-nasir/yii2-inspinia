<?php

namespace dxapp\themes\inspinia;


class AppAsset extends BaseAsset
{

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'dxapp\themes\inspinia\FontawesomeAsset'
    ];

    public function init()
    {
        if(YII_ENV_PROD){
            $this->css = [
                'css/animate.css',
                'css/style.css'
            ];
            $this->js = [
                '//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.9/metisMenu.min.js',
                '//cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js',
                '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                'js/inspinia.js',
            ];
        }else{
            $this->css = [
                'css/animate.css',
                'css/style.css'
            ];
            $this->js = [
                'js/plugins/metisMenu/jquery.metisMenu.js',
                'js/plugins/slimscroll/jquery.slimscroll.min.js',
                'js/plugins/pace/pace.min.js',
                'js/inspinia.js',
            ];
        }
        parent::init(); // TODO: Change the autogenerated stub
    }

}
