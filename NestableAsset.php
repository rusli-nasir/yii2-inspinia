<?php
namespace dxapp\themes\inspinia;

/**
 * Class NestableAsset
 *
 * Demo: nestable_list.html
 * @package dxapp\themes\inspinia
 */
class NestableAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/nestable/jquery.nestable.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}