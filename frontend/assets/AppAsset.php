<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        "tema/bower_components/bootstrap/dist/css/bootstrap.min.css",
        "tema/bower_components/font-awesome/css/font-awesome.min.css",
        "tema/bower_components/Ionicons/css/ionicons.min.css",
        "tema/dist/css/AdminLTE.min.css",
        "tema/dist/css/skins/_all-skins.min.css",
        "tema/bower_components/morris.js/morris.css",
        "tema/bower_components/jvectormap/jquery-jvectormap.css",
        "tema/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
        "tema/bower_components/bootstrap-daterangepicker/daterangepicker.css",
        "tema/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css",
        "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic",
    ];
    public $js = [
        "tema/bower_components/jquery/dist/jquery.min.js",
        "tema/bower_components/jquery-ui/jquery-ui.min.js",
        "tema/bower_components/bootstrap/dist/js/bootstrap.min.js",
        "tema/bower_components/raphael/raphael.min.js",
        "tema/bower_components/morris.js/morris.min.js",
        "tema/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js",
        "tema/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js",
        "tema/plugins/jvectormap/jquery-jvectormap-world-mill-en.js",
        "tema/bower_components/jquery-knob/dist/jquery.knob.min.js",
        "tema/bower_components/moment/min/moment.min.js",
        "tema/bower_components/bootstrap-daterangepicker/daterangepicker.js",
        "tema/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
        "tema/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js",
        "tema/bower_components/jquery-slimscroll/jquery.slimscroll.min.js",
        "tema/bower_components/fastclick/lib/fastclick.js",
        "tema/dist/js/adminlte.min.js",
        "tema/dist/js/pages/dashboard.js",
        "tema/dist/js/demo.js",
        "tema/dist/js/baru.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
