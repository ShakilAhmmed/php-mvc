<?php

namespace App\Controllers;
use App\Models\UserModel;


class HomeController
{
	 public function getIndex ()
	 {
//		  $users = DB::table('test')->get();
//		  dd($users);
		 return view("Backend/home");
	 }
}