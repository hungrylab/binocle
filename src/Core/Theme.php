<?php

namespace Binocle\Core;

use Binocle\Core;

class Theme
{
	public function __construct()
	{
		$hooks = new Hooks;
		$template = new Template;
	}

	// load config
	
	public function boot()
	{
		echo 'booting';
	}
}