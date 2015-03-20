<?php
/**
 * @link https://github.com/2amigos/yii2-dosamigos-asset-bundle
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace tests;

use tests\overrides\TestDosAmigosAsset;
use Yii;
use yii\web\AssetBundle;

/**
 * DosAmigosAssetTest
 */
class DosAmigosAssetTest extends TestCase
{
    public function testAsset()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        TestDosAmigosAsset::register($view);
        $this->assertEquals(2, count($view->assetBundles));
        $this->assertArrayHasKey('yii\\web\\JqueryAsset', $view->assetBundles);
        $this->assertTrue($view->assetBundles['tests\\overrides\\TestDosAmigosAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/views/rawlayout.php');
        $this->assertContains('jquery.js', $content);
        $this->assertContains('dosamigos.js', $content);
    }
}
