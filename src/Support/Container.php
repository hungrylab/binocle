<?php

namespace Binocle\Support;

class Container
{
	protected static $instance;

	public static function getInstance()
	{
		if (!isset(static::$instance)) {
			static::$instance = new \Pimple\Container;
		}

		return static::$instance;
	}
}