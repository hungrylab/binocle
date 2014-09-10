<?php

namespace Binocle\Core;

use Binocle\Support;

class Hook
{
	/**
	 * Add hook
	 * @param string $hook   
	 * @param mixed $action 
	 * @param string $type   
	 * @return bool
	 */
	public function add($hook, $action, $type = 'action')
	{
		$function = 'add_' . $type;
		return $function($hook, $action);
	}

	/**
	 * Remove hook
	 * @param  string $hook   
	 * @param  mixed $action 
	 * @param  string $type   
	 * @return bool
	 */
	public function remove($hook, $action, $type = 'action')
	{
		$func = 'remove_' . $type;
		return $func($hook, $action);
	}
}