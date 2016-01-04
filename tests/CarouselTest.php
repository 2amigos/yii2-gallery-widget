<?php
/**
 * @link https://github.com/2amigos/yii2-gallery-widget
 * @copyright Copyright (c) 2013-2016 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace tests;

use Yii;

/**
 * CarouselTest
 */
class CarouselTest extends \PHPUnit_Framework_TestCase
{
    public function testWidget()
    {
        $view = Yii::$app->getView();
        $content = $view->render('//carousel');
        $actual = $view->render('//layouts/main', ['content' => $content]);
        $expected = file_get_contents(__DIR__ . '/data/test-carousel.bin');
        $this->assertEquals($expected, $actual);
    }
}
