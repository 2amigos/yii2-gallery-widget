<?php
/**
 * @link https://github.com/2amigos/yii2-gallery-widget
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace tests;

use Yii;

/**
 * GalleryTest
 */
class GalleryTest extends \PHPUnit_Framework_TestCase
{
    public function testWidget()
    {
        $view = Yii::$app->getView();
        $content = $view->render('//gallery');
        $actual = $view->render('//layouts/main', ['content' => $content]);
        $expected = file_get_contents(__DIR__ . '/data/test-gallery.bin');
        $this->assertEquals($expected, $actual);
    }
}
