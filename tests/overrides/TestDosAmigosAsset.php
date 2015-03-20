<?php
/**
 * @link https://github.com/2amigos/yii2-dosamigos-asset-bundle
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
namespace tests\overrides;

use dosamigos\assets\DosAmigosAsset;

class TestDosAmigosAsset extends DosAmigosAsset
{
    public $sourcePath = '@tests/../src/assets/js';
}
