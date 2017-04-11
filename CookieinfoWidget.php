<?php

namespace ipoz\yii2\cookieinfo;

use yii\base\Widget;

class CookieinfoWidget extends Widget
{
    /**
     * @var string
     */
    public $message = '';

    public function run(){
        $this->render('cookieinfo');
    }
}