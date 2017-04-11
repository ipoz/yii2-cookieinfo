<?php

namespace ipoz\yii2\cookieinfo;

use yii\base\Widget;

class CookieinfoWidget extends Widget
{
    /**
     * @var string
     */
    public $message = '';

    /**
     * @var string
     */
    public $acceptButtonLabel = '';

    public function init()
    {
        parent::init();
        CookieinfoAsset::register($this->getView());
    }

    public function run()
    {
        if (isset($_COOKIE['cookieinfo'])) {
            return;
        }

        return $this->render('cookieinfo', [
            'message' => $this->message,
            'acceptButtonLabel' => $this->acceptButtonLabel
        ]);
    }
}