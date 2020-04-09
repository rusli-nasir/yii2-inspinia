<?php
namespace dxapp\themes\inspinia;

/**
 * Class CodeMirrorAsset
 *
 * Demo: code_editor.html
 * @package dxapp\themes\inspinia
 */
class CodeMirrorAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/codemirror/codemirror.css',
        'css/plugins/codemirror/ambiance.css'
    ];    
    public $js = [
        'js/plugins/codemirror/codemirror.js',
        'js/plugins/codemirror/mode/javascript/javascript.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}