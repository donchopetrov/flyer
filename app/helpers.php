<?php

function flash($title = null, $message = null)
{
	$flash = app('App\Http\Flash');
	
	if(func_num_args() == 0) {
		return $flash;
	}

	return $flash->info($title, $message);
}

function setActive($path, $active = 'active')
{
	return Request::is($path) ? $active : '';
}