Display cookie info for Yii2 web pages
===================================

Installation
----------
To install, either run
```
composer require ipoz/yii2-cookieinfo
```
or add to the `required` section of your `composer.json` file
```
"ipoz/yii2-cookieinfo": "*" 
```

Example usage
----------
```php
<?= \ipoz\yii2\cookieinfo\CookieinfoWidget::widget([
        'message' => \Yii::t('app', 'cookie_info'), 
        'acceptButtonLabel' => \Yii::t('app', 'accept')
    ]); ?>
```