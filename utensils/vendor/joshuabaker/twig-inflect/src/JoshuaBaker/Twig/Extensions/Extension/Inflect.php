<?php

namespace JoshuaBaker\Twig\Extensions\Extension;

class Inflect extends \Twig_Extension
{
	protected $inflector;

	public function __construct()
	{
		$this->inflector = \ICanBoogie\Inflector::get();
	}

	public function getName()
	{
		return 'inflect';
	}

	public function getFilters()
	{
		return array(
			'pluralize'   => new \Twig_Filter_Method($this, 'pluralize'),
			'singularize' => new \Twig_Filter_Method($this, 'singularize'),
			'camelize'    => new \Twig_Filter_Method($this, 'camelize'),
			'dasherize'   => new \Twig_Filter_Method($this, 'dasherize'),
			'humanize'    => new \Twig_Filter_Method($this, 'humanize'),
			'hyphenate'   => new \Twig_Filter_Method($this, 'hyphenate'),
			'ordinalize'  => new \Twig_Filter_Method($this, 'ordinalize'),
			'pascalize'   => new \Twig_Filter_Method($this, 'pascalize'),
			'slugify'     => new \Twig_Filter_Method($this, 'slugify'),
			'titleize'    => new \Twig_Filter_Method($this, 'titleize'),
			'underscore'  => new \Twig_Filter_Method($this, 'underscore'),
		);
	}

	public function pluralize($content, $num = 2)
	{
		if ($num == 1)
		{
			return $this->inflector->singularize($content);
		}

		return $this->inflector->pluralize($content);
	}

	public function singularize($content)
	{
		return $this->inflector->singularize($content);
	}

	public function camelize($content)
	{
		return $this->inflector->camelize($content, true);
	}

	public function dasherize($content)
	{
		return $this->inflector->dasherize($content);
	}

	public function humanize($content)
	{
		return $this->inflector->humanize($content);
	}

	public function hyphenate($content)
	{
		return $this->inflector->hyphenate($content);
	}

	public function ordinalize($content)
	{
		return $this->inflector->hyphenate($content);
	}

	public function pascalize($content)
	{
		return $this->inflector->camelize($content, false);
	}

	public function titleize($content)
	{
		return $this->inflector->titleize($content, false);
	}

	public function underscore($content)
	{
		return $this->inflector->underscore($content);
	}

}
