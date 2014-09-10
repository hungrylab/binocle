<?php

namespace Binocle\Core;

use Hook;
use Asset;

class Template
{
	/**
	 * Holds initial template
	 * @var object|string
	 */
	protected $template;

	/**
	 * Constructor
	 * @param object $container
	 */
	public function __construct($container)
	{
		$this->container = $container;

		// load wrapper if needed
		Hook::add('template_include', array($this, 'wrap'));

		// add basic assets
		Asset::addScript('jquery');
		Asset::addStyle('app', get_template_directory_uri() . '/assets/css/app.css');
	}

	/**
	 * Wraps initial template with ground layout
	 * @param string $template
	 * @return object|string
	 */
	public function wrap($template)
	{
		$this->template = Template\Loader::load($template);
		$groundTemplate = Template\Loader::load('layout.ground');

		return $groundTemplate;
	}

	/**
	 * Loads initial template
	 * @return void 
	 */
	public function loadTemplate()
	{
		include($this->template);
	}
}