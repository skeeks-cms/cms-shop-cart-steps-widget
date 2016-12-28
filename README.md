Widget shop cart steps for SkeekS CMS
===================================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist skeeks/cms-shop-cart-steps-widget "*"
```

or add

```
"skeeks/cms-shop-cart-steps-widget": "*"
```

Example
----------

```php
<?= \skeeks\cms\shopCartStepsWidget\ShopCartStepsWidget::widget(); ?>
```

View file
----------
```php
<?php
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

```

##Links
* [Web site](http://cms.skeeks.com)
* [Author](http://skeeks.com)

___

> [![skeeks!](https://gravatar.com/userimage/74431132/13d04d83218593564422770b616e5622.jpg)](http://skeeks.com)  
<i>SkeekS CMS (Yii2) — quickly, easily and effectively!</i>  
[skeeks.com](http://skeeks.com) | [cms.skeeks.com](http://cms.skeeks.com)


