<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 28.12.2016
 */
namespace skeeks\cms\shopCartStepsWidget\assets;
use skeeks\cms\base\AssetBundle;

/**
 * Class ShopCartStepsWidgetAsset
 *
 * @package skeeks\cms\shopCartStepsWidget\assets
 */
class ShopCartStepsWidgetAsset extends AssetBundle
{
    public $sourcePath = '@skeeks/cms/shopCartStepsWidget/assets/src';

    public $css             = [
        'style.css'
    ];
    public $js              = [];
    public $depends         = [];
}
