<?php

namespace App\Controllers;
class HomeController
{
	 public function getIndex ()
	 {
		 return view("Backend/home");
	 }
}