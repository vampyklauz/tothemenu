<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\towns;
use Illuminate\Support\Facades\Auth;

class TownController extends Controller
{
	public function __construct(){
		$this->middleware('auth');		
	}

    public function index(){
        $towns = Towns::all();
        return view('admin/town',compact('towns'));
    }

    public function addTown(Request $request){
    	if( $this->townNameExist($request->town_name) ){
	    	$request->session()->flash('ErrorMessage', 'Town already exist');
	    }else{
	    	$town = new Towns;
	    	$town->name = $request->town_name;
	    	$town->updated_by = Auth::user()->id;

	    	if( !$town->save() ){
	    		App::abort(500, 'Error');
	    	}else{
	    		$request->session()->flash('SuccessMessage', 'Town added successfully');
	    	}
	    }
	    return redirect('admin/towns');
    }

    public function editTown(Request $request){
    	if( $town = Towns::find($request->id) ){
    		// check if name has change
    		if( $town->name != $request->town_name ){
    			if( $this->townNameExist($request->town_name) ){
					$request->session()->flash('ErrorMessage', 'Town already exist');
					return redirect('admin/towns');
    			}else{
    				$town->name = $request->town_name; // Asign new town name
    			}
    		}
    		if( !$town->save() ){
	    		App::abort(500, 'Error');
	    	}else{
	    		$request->session()->flash('SuccessMessage', 'Town updated successfully');
	    	}
    	}else{
    		$request->session()->flash('ErrorMessage', 'Please try again, Something went wrong!');
    	}
    	return redirect('admin/towns');
    }

    public function removeTown(Request $request){
    	if( $town = Towns::find($request->id) ){
    		if( !$town->delete() ){
	    		App::abort(500, 'Error');
	    	}else{
	    		$request->session()->flash('SuccessMessage', 'Town removed successfully');
	    	}
    	}else{
    		$request->session()->flash('ErrorMessage', 'Please try again, Something went wrong!');
    	}
    	return redirect('admin/towns');
    }

    public function townNameExist($name){
    	return ( Towns::where('name',$name)->first() ) ? true : false;
    }
}
