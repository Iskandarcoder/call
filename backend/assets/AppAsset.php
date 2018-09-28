<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/icons/icomoon/styles.css',
        'css/bootstrap.css',
        'css/core.css',
        'css/components.css',
        'css/colors.css',
        //js
        'js/plugins/loaders/pace.min.js',
        //'js/core/libraries/jquery.min.js',
        'js/core/libraries/bootstrap.min.js',
        'js/plugins/loaders/blockui.min.js',
        'js/plugins/tables/datatables/datatables.min.js',
        'js/plugins/forms/selects/select2.min.js',
        'js/core/app.js',
        'js/pages/datatables_basic.js',
        'js/pages/form_bootstrap_select.js',
    ];
    public $js = [
        'js/main.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
