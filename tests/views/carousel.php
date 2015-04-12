<?php

use dosamigos\gallery\Carousel;
use yii\web\JsExpression;

/* @var $this \yii\web\View */
?>

<?= Carousel::widget() ?>

<?= Carousel::widget(['items' => [
    [
        'url' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_b.jpg',
        'src' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_s.jpg',
        'options' =>['title' => 'Camposanto monumentale (inside)'],
    ],
    [
        'url' => 'http://farm3.static.flickr.com/2863/9479121747_0b37c63fe7_b.jpg',
        'src' => 'http://farm3.static.flickr.com/2863/9479121747_0b37c63fe7_s.jpg',
        'options' => ['title' => 'Hafsten - Sunset'],
    ],
    [
        'url' => 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_b.jpg',
        'src' => 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_s.jpg',
        'options' => ['title' => 'Sail us to the Moon'],
    ],
]]) ?>

<?= Carousel::widget([
    'json' => true,
    'items' => [
        'String item',
        [
            'url' => 'http://farm3.static.flickr.com/2863/9479121747_0b37c63fe7_b.jpg',
            'options' => ['title' => 'Hafsten - Sunset'],
        ],
        [
            'url' => 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_b.jpg',
            'src' => 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_s.jpg',
            'options' => ['title' => 'Sail us to the Moon'],
        ],
    ],
    'clientEvents' => [
        'test1' => 'function () { }',
        'test2' => new JsExpression('function () { }'),
    ],
]) ?>
