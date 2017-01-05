<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cuisines;
use Illuminate\Support\Facades\Auth;

class CuisineController extends Controller
{
	public function __construct(){
		$this->middleware('auth');		
	}

    public function index(){
        $cuisines = Cuisines::all();
        return view('admin/cuisine',compact('cuisines'));
    }

    public function addCuisine(Request $request){
    	if( $this->cuisineNameExist($request->cuisine_name) ){
	    	$request->session()->flash('ErrorMessage', 'Cuisine already exist');
	    }else{
	    	$cuisine = new Cuisines;
	    	$cuisine->name = $request->cuisine_name;
	    	$cuisine->updated_by = Auth::user()->id;

	    	if( !$cuisine->save() ){
	    		App::abort(500, 'Error');
	    	}else{
	    		$request->session()->flash('SuccessMessage', 'Cuisine added successfully');
	    	}
	    }
	    return redirect('admin/cuisines');
    }

    public function editCuisine(Request $request){
    	if( $cuisine = Cuisines::find($request->id) ){
    		// check if name has change
    		if( $cuisine->name != $request->cuisine_name ){
    			if( $this->cuisineNameExist($request->cuisine_name) ){
					$request->session()->flash('ErrorMessage', 'Cuisine already exist');
					return redirect('admin/cuisines');
    			}else{
    				$cuisine->name = $request->cuisine_name; // Asign new cuisine name
    			}
    		}
    		if( !$cuisine->save() ){
	    		App::abort(500, 'Error');
	    	}else{
	    		$request->session()->flash('SuccessMessage', 'Cuisine updated successfully');
	    	}
    	}else{
    		$request->session()->flash('ErrorMessage', 'Please try again, Something went wrong!');
    	}
    	return redirect('admin/cuisines');
    }

    public function removeCuisine(Request $request){
    	if( $cuisine = Cuisines::find($request->id) ){
    		if( !$cuisine->delete() ){
	    		App::abort(500, 'Error');
	    	}else{
	    		$request->session()->flash('SuccessMessage', 'Cuisine removed successfully');
	    	}
    	}else{
    		$request->session()->flash('ErrorMessage', 'Please try again, Something went wrong!');
    	}
    	return redirect('admin/cuisines');
    }

    public function cuisineNameExist($name){
    	return ( Cuisines::where('name',$name)->first() ) ? true : false;
    }
}
