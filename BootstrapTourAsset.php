<?php
namespace dxapp\themes\inspinia;

/**
 * Class BootstrapTourAsset
 *
 * Demo: tour.html
 * @package dxapp\themes\inspinia
 */
class BootstrapTourAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/bootstrapTour/bootstrap-tour.min.css'
    ];
    public $js = [
        'js/plugins/bootstrapTour/bootstrap-tour.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}