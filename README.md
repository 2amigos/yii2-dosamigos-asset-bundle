Asset Bundle Component for Yii2
===============================

[![Latest Version](https://img.shields.io/github/tag/2amigos/yii2-dosamigos-asset-bundle.svg?style=flat-square&label=release)](https://github.com/2amigos/yii2-dosamigos-asset-bundle/tags)
[![Software License](https://img.shields.io/badge/license-BSD-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/2amigos/yii2-dosamigos-asset-bundle/master.svg?style=flat-square)](https://travis-ci.org/2amigos/yii2-dosamigos-asset-bundle)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/2amigos/yii2-dosamigos-asset-bundle.svg?style=flat-square)](https://scrutinizer-ci.com/g/2amigos/yii2-dosamigos-asset-bundle/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/2amigos/yii2-dosamigos-asset-bundle.svg?style=flat-square)](https://scrutinizer-ci.com/g/2amigos/yii2-dosamigos-asset-bundle)
[![Total Downloads](https://img.shields.io/packagist/dt/2amigos/yii2-dosamigos-asset-bundle.svg?style=flat-square)](https://packagist.org/packages/2amigos/yii2-dosamigos-asset-bundle)

Includes an asset bundle component which will register assets that are shared among projects that includes certain
extensions created by [2amigOS! Consulting Group LLC](http://2amigos.us). Currently, this asset bundle provides:

* dosamigos javascript root namespace  
* Micro templating 
* base64 encoding/decoding

The bundle will increase according to the requirements of the Yii 2 extensions we build along the way.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require "2amigos/yii2-dosamigos-asset-bundle" "*"
```
or add

```json
"2amigos/yii2-dosamigos-asset-bundle" : "*"
```

to the require section of your application's `composer.json` file.

Usage
-----

```php
use dosamigos\assets\DosAmigosAsset;

/* @var yii\web\View $this */
DosAmigosAsset::register($this);

```

If its a requirement of an extension created by [2amigOS!](http://2amigos.us) it will be automatically registered.

Further Information
-------------------
Please, check the [Yii2](https://github.com/yiisoft/yii2/blob/master/docs/guide/structure-assets.md)
documentation about assets for further information about its integration.


<blockquote>
    <a href="http://www.2amigos.us"><img src="http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png"></a><br>
    <i>web development has never been so fun</i><br> 
    <a href="http://www.2amigos.us">www.2amigos.us</a>
</blockquote>
