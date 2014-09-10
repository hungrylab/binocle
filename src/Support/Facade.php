<?php

namespace Binocle\Support;

abstract class Facade
{
	/**
	 * Holds instances of facades
	 * @var array
	 */
	protected static $instances;

	/**
	 * Container holding dependencies
	 * @var object
	 */
	protected static $container;

	/**
	 * Gets instance of facade from container by using accessor
	 * @return object 
	 */
	private static function getInstance()
	{
		$accessor = static::getContainerAccessor();

		if (!isset(static::$instances[$accessor])) {
			$container = static::getContainer();
			static::$instances[$accessor] = $container[$accessor];
		}

		return static::$instances[$accessor];
	}

	/**
	 * Gets container instance
	 * @return object
	 */
	private static function getContainer()
	{
		if (!static::$container) {
			static::$container = Container::getInstance();
		}

		return static::$container;
	}

	/**
	 * Gets the accessor of facade
	 * @return string 
	 */
	protected static function getContainerAccessor()
	{
		throw new \RuntimeException("Facade does not implement getContainerAccessor method.");
	}

	/**
	 * Magic function, passes the static call to the instance
	 * @param  string $method
	 * @param  array $args
	 * @return mixed
	 */
	public static function __callStatic($method, $args)
	{
		$instance = static::getInstance();

		switch(count($args)) {
			case 0:
				return $instance->$method();

			case 1:
				return $instance->$method($args[0]);

			case 2:
				return $instance->$method($args[0], $args[1]);

			case 3:
				return $instance->$method($args[0], $args[1], $args[2]);

			case 4:
				return $instance->$method($args[0], $args[1], $args[2], $args[3]);

			default:
				return call_user_func_array(array($instance, $method), $args);
		}
	}
}