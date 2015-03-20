<?php
/**
 * @link https://github.com/2amigos/yii2-dosamigos-asset-bundle
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace tests;

use dosamigos\assets\DosAmigosAsset;
use Yii;
use yii\web\AssetBundle;

/**
 * DosAmigosAssetTest
 */
class DosAmigosAssetTest extends TestCase
{
    public function testWidget()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        DosAmigosAsset::register($view);
        $this->assertEquals(4, count($view->assetBundles));
        $this->assertArrayHasKey('yii\\web\\JqueryAsset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['dosamigos\\asssets\\DosAmigosAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/data/views/rawlayout.php');
        $this->assertContains('jquery.js', $content);
        $this->assertContains('dosamigos.js', $content);
    }
}
