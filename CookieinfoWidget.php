<?php

namespace ipoz\yii2\cookieinfo;

use yii\base\Widget;

class CookieinfoWidget extends Widget
{
    /**
     * @var string
     */
    public $message = '';

    public function init()
    {
        parent::init();
        CookieinfoAsset::register($this->getView());
    }

    public function run()
    {
        return $this->render('cookieinfo', [
            'message' => $this->message
        ]);
    }
}