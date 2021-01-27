<?php 

namespace Themes\Example;

use Ryssbowh\CraftThemes\Theme as BaseTheme;
use Themes\Example\assetBundles\Example;
use Themes\Example\assetBundles\Images;

class Theme extends BaseTheme
{	
	/**
	 * inheritDoc
	 */
	protected $assetBundles = [
		'*' => [
			Example::class,
		]
	];

	/**
	 * inheritDoc
	 */
	public function getName(): string
	{
		return 'Example';
	}
}