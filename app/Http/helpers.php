<?php


use App\User;
use App\Access;
use App\Access_value;
use Illuminate\Support\Facades\Auth;

if (! function_exists('mainMenu')) {
    /**
     * Convert a value to title case.
     *
     * @return active Data
     */
    function mainMenu()
    {
        $user_level = Auth::user()->access_level;
		$access = Access::find($user_level);
    	$access = json_decode( $access->access_value );
    	//Check access level
    	if( in_array('all', $access) ){
    		$menus = Access_value::all();
    	}else{
    		$menus = Access_value::find($access);
    	}
    	return $menus;
    }

}