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
}