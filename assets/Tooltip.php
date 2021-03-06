<?php

namespace worstinme\uikit\assets;

use yii\web\AssetBundle;

class Tooltip extends AssetBundle
{
    public $sourcePath = '@worstinme/uikit/uikit';

    public $css = [
        'css/components/tooltip.min.css',
    ];

    public $js = [
        'js/components/tooltip.min.js',
    ];

    public $depends = [
        'worstinme\uikit\UikitAsset',
    ];
}