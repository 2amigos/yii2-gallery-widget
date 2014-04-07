<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\gallery;

use yii\web\AssetBundle;

/**
 * GalleryAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\gallery
 */
class GalleryAsset extends AssetBundle
{
    public $sourcePath = '@vendor/2amigos/yii2-gallery-widget/assets/';

    public $css = [
        'vendor/css/blueimp-gallery.min.css'
    ];

    public $js = [
        'vendor/js/blueimp-gallery.min.js',
        'dosamigos-blueimp-gallery.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
} 