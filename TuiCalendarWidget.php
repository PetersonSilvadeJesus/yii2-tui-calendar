<?php

namespace petersonsilvadejesus\tuicalendar;

use Yii;
use yii\helpers\Json;
use yii\helpers\Url;

/**
 * This is just an example.
 */
class TuiCalendarWidget extends \yii\base\Widget
{
    public $events;
    public $options;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        //set language
        if (!isset(Yii::$app->i18n->translations['tuicalendar'])) {
            Yii::$app->i18n->translations['tuicalendar'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en',
                'basePath' => '@petersonsilvadejesus/tuicalendar/messages'
            ];
        }
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->render('widget/index');

        $this->registerClientScript();
    }

    /**
     * @return string
     * Returns an JSON array containing the fullcalendar options,
     * all available callbacks will be wrapped in JsExpressions objects if they're set
     */
    private function getClientOptions()
    {
        $options['events'] = $this->events;
        $options = array_merge($options, $this->clientOptions);

        return \yii\helpers\Json::encode($options);
    }

    /**
     * Registers js Input
     */
    public function registerClientScript()
    {
        $view = $this->getView();
        TuiCalendarAsset::register($view);
    }
}
