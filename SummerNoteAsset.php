<?php
namespace dxapp\themes\inspinia;

/**
 * Class SummerNoteAsset
 *
 * Demo: form_editors.html
 * @package dxapp\themes\inspinia
 */
class SummerNoteAsset extends BaseAsset
{
    
    public $css = [
        'css/plugins/summernote/summernote.css',
        'css/plugins/summernote/summernote-bs3.css'
    ];
    public $js = [
        'js/plugins/summernote/summernote.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}