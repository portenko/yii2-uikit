<?php

namespace worstinme\uikit\assets;

use yii\web\AssetBundle;

class DinamicGrid extends AssetBundle
{
    public $sourcePath = '@worstinme/uikit/uikit';

    public $css = [
        
    ];

    public $js = [
        'js/components/grid.min.js',
    ];

    public $depends = [
        'worstinme\uikit\UikitAsset',
    ];
}