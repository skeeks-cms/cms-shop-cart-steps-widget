<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 16.10.2016
 */
/* @var $this yii\web\View */
/* @var $widget \skeeks\cms\shop\widgets\cart\ShopCartStepsWidget */
\skeeks\cms\shopCartStepsWidget\assets\ShopCartStepsWidgetAsset::register($this);
$widget     = $this->context;
?>
<?= \yii\helpers\Html::beginTag('div', $widget->options); ?>
    <ul class="process-steps nav nav-justified">
        <li class="active">
            <a href="<?= \yii\helpers\Url::to(['/shop/cart']); ?>" data-pjax="0">1</a>
            <h5><?= \Yii::t('skeeks/shop-cart-steps-widget', 'Cart'); ?></h5>
        </li>
        <li class="<?= in_array(\Yii::$app->controller->action->getUniqueId(), ['shop/cart/checkout', 'shop/order/finish']) ? "active" : ""; ?>">
            <a href="<?= \yii\helpers\Url::to(['/shop/cart/checkout']); ?>" data-pjax="0">2</a>
            <h5><?= \Yii::t('skeeks/shop-cart-steps-widget', 'Ordering'); ?></h5>
        </li>
        <li class="<?= \Yii::$app->controller->action->getUniqueId() == 'shop/order/finish' ? "active" : ""; ?>">
            <a href="#">3</a>
            <h5><?= \Yii::t('skeeks/shop-cart-steps-widget', 'Ready order'); ?></h5>
        </li>
    </ul>
<?= \yii\helpers\Html::endTag('div'); ?>
