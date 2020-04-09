<?php
namespace dxapp\themes\inspinia;

/**
 * Class DataMapsAsset
 *
 * Demo: datamaps.html
 * @package dxapp\themes\inspinia
 */
class DataMapsAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/typehead/bootstrap3-typeahead.min.js',
        'js/plugins/d3/d3.min.js',
        'js/plugins/topojson/topojson.js',
        'js/plugins/datamaps/datamaps.all.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}