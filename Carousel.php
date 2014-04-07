<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\gallery;

use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Carousel BlueImp Gallery Widget
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\gallery
 */
class Carousel extends Gallery
{
    /**
     * @var bool whether to json encode items or not. If using Json to encode items, we will be able to render
     * different
     */
    public $json = false;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        Html::addCssClass($this->templateOptions, 'blueimp-gallery-carousel');
        $this->clientOptions['carousel'] = true;
    }

    /**
     * @inheritdoc
     */
    public function renderItems()
    {
        if ($this->json) {
            return null;
        }
        return parent::renderItems();
    }

    /**
     * @return string the carousel template
     */
    public function renderTemplate()
    {
        $template[] = '<div class="slides"></div>';
        $template[] = '<h3 class="title"></h3>';
        $template[] = '<a class="prev">‹</a>';
        $template[] = '<a class="next">›</a>';
        $template[] = '<a class="play-pause"></a>';
        $template[] = '<ol class="indicator"></ol>';

        return Html::tag('div', implode("\n", $template), $this->templateOptions);
    }

    /**
     * @inheritdoc
     */
    public function registerClientScript()
    {
        $view = $this->getView();
        GalleryAsset::register($view);

        $id = $this->options['id'];
        $options = Json::encode($this->clientOptions);
        $items = $this->json ? Json::encode($this->items) : "$('#$id').find('a.gallery-item').hide()";
        $js = "blueimp.Gallery($items, $options);";
        $view->registerJs($js);
    }
} 