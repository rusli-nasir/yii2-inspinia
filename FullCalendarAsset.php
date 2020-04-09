<?php
namespace dxapp\themes\inspinia;

/**
 * Class FullCalendarAsset
 *
 * Demo: calendar.html
 * @package dxapp\themes\inspinia
 */
class FullCalendarAsset extends BaseAsset
{
    
    public $css = [
        'ss/plugins/fullcalendar/fullcalendar.css',
        'css/plugins/fullcalendar/fullcalendar.print.css'
    ];
    public $js = [
        'js/plugins/fullcalendar/moment.min.js',
        'js/plugins/fullcalendar/fullcalendar.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}