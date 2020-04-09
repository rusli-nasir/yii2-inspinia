<?php
namespace dxapp\themes\inspinia;

/**
 * Class BootstrapMarkdownAsset
 *
 * Demo: form_markdown.html
 * @package dxapp\themes\inspinia
 */
class BootstrapMarkdownAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/bootstrap-markdown/bootstrap-markdown.min.css'
    ];
    public $js = [
        'js/plugins/bootstrap-markdown/bootstrap-markdown.js',
        'js/plugins/bootstrap-markdown/markdown.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}