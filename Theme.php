<?php 

namespace Themes\Example;

use Ryssbowh\CraftThemes\ThemePlugin;
use Ryssbowh\CraftThemes\models\Region;
use Themes\Example\assetBundles\Example;
use Themes\Example\assetBundles\Images;

class Theme extends ThemePlugin
{	
	/**
	 * inheritDoc
	 */
	protected $assetBundles = [
		'*' => [
			Example::class,
		]
	];

	protected $selectable = false;

	public function getRegions(): array
	{
		return [
			new Region([
				'handle' => 'header-left',
				'name' => \Craft::t('themes', 'Header Left'),
				'width' => '49%',
			]),
			new Region([
				'handle' => 'header-right',
				'name' => \Craft::t('themes', 'Header Right'),
				'width' => '49%',
			]),
			new Region([
				'handle' => 'before-content',
				'name' => \Craft::t('themes', 'Before Content'),
				'width' => '100%',
			]),
			new Region([
				'handle' => 'content',
				'name' => \Craft::t('themes', 'Content'),
				'width' => '100%',
			]),
			new Region([
				'handle' => 'after-content',
				'name' => \Craft::t('themes', 'After Content'),
				'width' => '100%',
			]),
			new Region([
				'handle' => 'footer-left',
				'name' => \Craft::t('themes', 'Footer Left'),
				'width' => '49%',
			]),
			new Region([
				'handle' => 'footer-right',
				'name' => \Craft::t('themes', 'Footer Right'),
				'width' => '49%',
			])
		];
	}
}