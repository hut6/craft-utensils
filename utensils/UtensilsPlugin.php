<?php

namespace Craft;

class UtensilsPlugin extends BasePlugin
{
	public function getName()
	{
		return 'Utensils';
	}

	public function getVersion()
	{
		return '0.1.0';
	}

	public function getDeveloper()
	{
		return 'Joshua Baker';
	}

	public function getDeveloperUrl()
	{
		return 'http://joshuabaker.com/';
	}

	public function init()
	{
		// Autoload Composer packages
		require_once __DIR__ . '/vendor/autoload.php';

		parent::init();
	}

	public function addTwigExtension()
	{
		return array(
			new \Twig_Extensions_Extension_Text(),
			new \Twig_Extensions_Extension_I18n(),
			new \Twig_Extensions_Extension_Intl(),
			new \Twig_Extensions_Extension_Array(),
			new \Twig_Extensions_Extension_Date(),

			new \KzykHys\TwigExtensions\Extension\Core(),
			new \KzykHys\TwigExtensions\Extension\Text(),
			new \KzykHys\TwigExtensions\Extension\Snippet(),
			new \KzykHys\TwigExtensions\Extension\Markdown(),
			// new \KzykHys\TwigExtensions\Extension\SyntaxHighlight(),
			new \KzykHys\TwigExtensions\Extension\Less(),
			// new \KzykHys\TwigExtensions\Extension\Pipe(),

			new \JoshuaBaker\Twig\Extensions\Extension\Inflect(),
		);
	}
}
