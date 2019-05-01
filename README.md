SOAP Client Extension for Yii 2
==============================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require m-comscience/yii2-soap-client "@dev"
```

or add

```json
"m-comscience/yii2-soap-client": "@dev"
```

to the `require` section of your `composer.json` file.

Usage
-----

You need to setup soap client application component:

```php
'components' => [
    'soapClient' => [
        'class' => 'mcomscience\soapclient\Client',
        'url' => 'http://myservice.com/api',
        'options' => [
            'cache_wsdl' => WSDL_CACHE_NONE,
        ],
    ]
    ...
]
```

or define the client directly in the code:

```php
$client = new \mcomscience\soapclient\Client([
    'url' => 'http://myservice.com/api',
]);
```

Example of calling the SOAP function:

```php
$client = Yii::$app->soapClient;
echo $client->getFunction();
```
