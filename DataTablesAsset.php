<?php
namespace dxapp\themes\inspinia;

/**
 * Class DataTablesAsset
 *
 * Demo: table_data_tables.html
 * @package dxapp\themes\inspinia
 */
class DataTablesAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/dataTables/datatables.min.css'
    ];
    public $js = [
        'js/plugins/dataTables/datatables.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}