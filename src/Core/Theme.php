<?php

namespace Binocle\Core;

use Binocle\Support\Container as Container;

class Theme
{
	/**
	 * Instance of IoC DIC
	 * @var object
	 */
	private $container;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->container = Container::getInstance();
		
		// set dependencies
		$this->container['hook'] = function($c) {
			return new \Binocle\Core\Hook;
		};

		$this->container['template'] = function($c) {
			return new \Binocle\Core\Template($c);
		};

		$this->container['asset'] = function($c) {
			return new \Binocle\Core\Template\Asset;
		};

		class_alias('Binocle\Core\Facades\Asset', 'Asset');
		class_alias('Binocle\Core\Facades\Hook', 'Hook');
	}

	/**
	 * Boot theme
	 * @return void 
	 */
	public function boot()
	{
		// load template
		$this->container['template'];

		// clean up
		
	}
}