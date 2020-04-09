<?php
namespace dxapp\themes\inspinia;

/**
 * Class JasnyAsset
 *
 * Demo: form_advanced.html
 * @package dxapp\themes\inspinia
 */
class JasnyAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/jasny/jasny-bootstrap.min.css'
    ];
    public $js = [
        'js/plugins/jasny/jasny-bootstrap.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}