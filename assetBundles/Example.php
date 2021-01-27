<?php 

namespace Themes\Example\assetBundles;

use craft\web\AssetBundle;

class Example extends AssetBundle
{
	public $sourcePath = "@themesPath/example";

	/**
     * @inheritdoc
     */
    public $js = [
        'js/example-theme.js',
    ];

    public $css = [
        'css/example-theme.css',
    ];
}