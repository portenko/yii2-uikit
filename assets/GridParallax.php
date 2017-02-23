<?php

namespace worstinme\uikit\assets;

use yii\web\AssetBundle;

class GridParallax extends AssetBundle
{
    public $sourcePath = '@worstinme/uikit/uikit';

    public $css = [
        
    ];

    public $js = [
        'js/components/grid-parallax.min.js',
    ];

    public $depends = [
        'worstinme\uikit\UikitAsset',
    ];
}