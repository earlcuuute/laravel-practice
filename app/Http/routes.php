<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{id}',function($id){
	$user = App\user::find($id);
	$roles = $user->roles;
	
	echo '<pre>';
	foreach($roles as $role){
		echo $role->role;
	}
	//echo $test->first;
	echo "</pre>";
});

Route::get('main',function(){
	/*
	$data = array(
		'var1' => "earl",
		'var2' => "is",
		'var1' => "real"
	);
	*/
	return view('main', array("var1"=>"earl"));
});

Route::get('roles',function(){
	$roles = App\role::All();
	echo '<pre>';
	foreach($roles as $role){
		echo $role->role ." " .$role->user->last . "<br>";
	}
	echo "</pre>";
});

Route::get('users',function(){
    $users = App\user::All();
	echo '<pre>';
	foreach($users as $user){
		echo $user->first ."<br>";
	}
	echo "</pre>";
});

