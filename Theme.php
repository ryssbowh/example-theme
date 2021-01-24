<?php 

namespace example;

use Ryssbowh\CraftThemes\Theme as BaseTheme;
use themes\front\assets\Example;

class Theme extends BaseTheme
{
	/**
	 * inheritDoc
	 */
	protected $bundleAssets = [
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

	/**
	 * inheritDoc
	 */
	public function getHandle(): string
	{
		return 'example';
	}
}