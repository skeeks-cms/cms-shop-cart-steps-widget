<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 16.10.2016
 */
/* @var $this yii\web\View */
/* @var $widget \skeeks\cms\shopCartStepsWidget\ShopCartStepsWidget */
\skeeks\cms\shopCartStepsWidget\assets\ShopCartStepsWidgetAsset::register($this);
$widget     = $this->context;

$payActive = false;
$endActive = false;
if (\Yii::$app->controller->action->getUniqueId() == 'shop/order/finish') {
    if ($widget->shopOrder) {
        if ($widget->shopOrder->payed == 'Y') {
            $endActive = true;
        } else {
            $payActive = true;
        }
    } else {
        $endActive = true;
    }
}
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

        <li class="<?= $payActive ? "active" : ""; ?>">
            <a href="#" data-pjax="0">3</a>
            <h5><?= \Yii::t('skeeks/shop-cart-steps-widget', 'Payment'); ?></h5>
        </li>
        <li class="<?= $endActive ? "active" : ""; ?>">
            <a href="#">4</a>
            <h5><?= \Yii::t('skeeks/shop-cart-steps-widget', 'Ready order'); ?></h5>
        </li>
    </ul>
<?= \yii\helpers\Html::endTag('div'); ?>
