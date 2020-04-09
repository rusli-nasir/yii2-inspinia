<?php
namespace dxapp\themes\inspinia;

/**
 * Class ValidateAsset
 *
 * Demo: validation.html
 * @package dxapp\themes\inspinia
 */
class ValidateAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/validate/jquery.validate.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}