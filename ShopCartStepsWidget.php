<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 28.12.2016
 */
namespace skeeks\cms\shopCartStepsWidget;

use skeeks\cms\base\WidgetRenderable;
use skeeks\cms\models\CmsContentElement;
use skeeks\cms\models\CmsTree;
use skeeks\cms\shop\models\ShopOrder;
use skeeks\widget\chosen\Chosen;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/**
 * Class ShopCartStepsWidget
 *
 * @package skeeks\cms\rpViewWidget
 */
class ShopCartStepsWidget extends WidgetRenderable
{
    /**
     * @var ShopOrder
     */
    public $shopOrder = null;

    public function init()
    {
        parent::init();
        $this->options['id'] = $this->id;

        self::registerTranslations();
    }

    public $viewFile = 'default';

    public $options = [];
    /**
     * Подготовка данных для шаблона
     * @return $this
     */
    public function run()
    {
        return $this->render($this->viewFile);
    }


    static public $isRegisteredTranslations = false;

    static public function registerTranslations()
    {
        if (self::$isRegisteredTranslations === false)
        {
            \Yii::$app->i18n->translations['skeeks/shop-cart-steps-widget'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en',
                'basePath' => '@skeeks/cms/shopCartStepsWidget/messages',
                'fileMap' => [
                    'skeeks/shop-cart-steps-widget' => 'main.php',
                ],
            ];
            self::$isRegisteredTranslations = true;
        }
    }


}