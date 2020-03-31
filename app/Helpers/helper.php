<?php

if (!function_exists('view')) {
	 function view ($view_name = '')
	 {
		  if (!empty($view_name)) {
			   require_once __DIR__ . "/../../resources/views/{$view_name}.php";
		  }
	 }
}

if (!function_exists('include_asset')) {
	 function include_asset ($asset_name = '')
	 {
		  if (!empty($asset_name)) {
			   require_once __DIR__ . "/../../resources/views/{$asset_name}.php";
		  }
	 }
}