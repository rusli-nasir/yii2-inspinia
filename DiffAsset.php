<?php
namespace dxapp\themes\inspinia;

/**
 * Class DiffAsset
 *
 * Demo: diff.html
 * @package dxapp\themes\inspinia
 */
class DiffAsset extends BaseAsset
{
    
    public $js = [
        'js/plugins/diff_match_patch/javascript/diff_match_patch.js',
        'js/plugins/preetyTextDiff/jquery.pretty-text-diff.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}