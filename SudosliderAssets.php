<?php
/**
 * Assets class file
 *
 * @author Oleg Martemjanov
 */
namespace demogorgorn\sudoslider;

use yii\web\AssetBundle;
use Yii;

class SudosliderAssets extends AssetBundle
{
	public $sourcePath = '@ss/assets';
	public $basePath = '@webroot/assets';
	public $js = [
		'js/jquery.sudoSlider.min.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];

	public function init() {
		Yii::setAlias('@ss', __DIR__);
		return parent::init();
	}
}
