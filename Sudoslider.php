<?php

namespace demogorgorn\sudoslider;

use Yii;
use yii\helpers\Html;
use yii\base\InvalidConfigException;
use demogorgorn\sudoslider\SudosliderAssets;

/**
 * Yii2 widget for jQuery SudoSlider (http://webbies.dk/SudoSlider/index.html).
 *
 * Example of ajax mode configuration:
 * ```php
 * echo \demogorgorn\uikit\sudoslider\Sudoslider::widget([
 *   'configuration' => [
 *      'ajax' => [
 *         \Yii::$app->request->getBaseUrl() . '/images/slider/01.jpg',
 *         \Yii::$app->request->getBaseUrl() . '/images/slider/02.jpg',
 *         \Yii::$app->request->getBaseUrl() . '/images/slider/03.jpg',
 *      ],
 *      'numeric' => false,
 *      'continuous' => true,
 *      'effect' => 'fade',
 *      'auto' => true,
 *      'prevNext' => false
 *   ],
 * ]);
 * ```
 *
 * @author Oleg Martemjanov <demogorgorn@gmail.com>
 */

class Sudoslider extends \yii\base\Widget {

    /**
     * @var array the HTML attributes for the widget container tag.
     */
    public $options = [];

    /**
     * @var array of the slider js options
     * @see http://webbies.dk/SudoSlider/help/
     */
    public $configuration = [];

    /**
     * Initializes the widget.
     */
    public function init() {
        
        parent::init();

        if (!isset($this->options['id'])) 
            $this->options['id'] = $this->getId();
        
    }

    /**
     * Renders the widget.
     */
    public function run() {

        SudosliderAssets::register($this->view);

        echo Html::tag('div','', $this->options);
        
        $this->registerScript();
    }

    public function getConfig() {

        if (!isset($this->configuration) || !is_array($this->configuration) || empty($this->configuration))
            throw new InvalidConfigException("You should define 'configuration' option and add values according to the documentation!");

        return \yii\helpers\Json::encode($this->configuration);
    }

    protected function registerScript()
    {
        $this->getView()->registerJs("
            $('#" . $this->options['id'] . "').sudoSlider(" . $this->getConfig() . ");
        ");
    }

}
