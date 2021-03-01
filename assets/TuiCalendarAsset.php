<?php
namespace petersonsilvadejesus\tuicalendar;

class TuiCalendarAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/petersonsilvadejesus/tuicalendar/assets';
    public $css = [
        'css/tui-time-picker.css',
        'css/tui-date-picker.css',
        'css/tui-calendar.css',
    ];
    public $js = [
        'js/tui-code-snippet.min.js',
        'js/tui-time-picker.min.js',
        'js/tui-date-picker.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}