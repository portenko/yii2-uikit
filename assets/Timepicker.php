<?php

namespace worstinme\uikit\assets;

use yii\web\AssetBundle;

class Timepicker extends AssetBundle
{
    public $sourcePath = '@worstinme/uikit/uikit';

    public $css = [
        'css/components/timepicker.min.css',
    ];

    public $js = [
        'js/components/timepicker.min.js',
    ];

    public $depends = [
        'worstinme\uikit\UikitAsset',
    ];
}