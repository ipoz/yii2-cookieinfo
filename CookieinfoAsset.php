<?php

namespace ipoz\yii2\cookieinfo;

use yii\web\AssetBundle;

class CookieinfoAsset extends AssetBundle
{
    public $css = [
        'css/cookieinfo.css'
    ];

    public $js = [
        'js/cookieinfo.js'
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }

}