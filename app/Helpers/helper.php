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

if (!function_exists('partial_asset')) {
	 function partial_asset ($partial = '')
	 {
		  if (!empty($partial)) {
			   require_once __DIR__ . "/../../resources/views/{$partial}.php";
		  }
	 }
}

if (!function_exists('dd')) {
	 function dd ($data = [])
	 {
		  if (!empty($data)) {
			   echo "<pre>";
			   print_r($data);
			   echo "</pre>";
		  }
		  die();
	 }
}