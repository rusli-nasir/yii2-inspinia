<?php
namespace dxapp\themes\inspinia;

/**
 * Class PeityAsset
 *
 * Demo: graph_peity.html
 * @package dxapp\themes\inspinia
 */
class PeityAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/peity/jquery.peity.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}