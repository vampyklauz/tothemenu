<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;

use App\counties;
use App\states;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{

	public function __construct(){
		$this->middleware('auth');		
	}

    public function index(){
    	return view('admin/index');
    }

    public function locations(States $state){
    	$counties = Counties::where('status',0)->get();
    	return view('admin/locations',compact('counties','state'));
    }

    public function cuisine(){
        return view('admin/cuisine');
    }

    public function addCounty(Request $request){
    	if( $this->countyNameExist($request->county_name) ){
	    	$request->session()->flash('ErrorMessage', 'County already exist');
	    }else{
	    	$county = new Counties;
	    	$county->state_id = 1; // New Jersey
	    	$county->county_name = $request->county_name;
	    	$county->county_link = $request->county_link;
	    	$county->county_code = strtoupper($request->county_code);
	    	$county->updated_by = Auth::user()->id;

	    	if( !$county->save() ){
	    		App::abort(500, 'Error');
	    	}else{
	    		$request->session()->flash('SuccessMessage', 'County added successfully');
	    	}
	    }
	    return redirect('admin/locations');
    }

    public function editCounty(Request $request){
    	if( $county = Counties::find($request->id) ){
    		// check if name has change
    		if( $county->county_name != $request->county_name ){
    			if( $this->countyNameExist($request->county_name) ){
					$request->session()->flash('ErrorMessage', 'County already exist');
					return redirect('admin/locations');
    			}else{
    				$county->county_name = $request->county_name; // Asign new county name
    			}
    		}
    		$county->county_link = $request->county_link;
    		$county->county_code = strtoupper($request->county_code);
    		if( !$county->save() ){
	    		App::abort(500, 'Error');
	    	}else{
	    		$request->session()->flash('SuccessMessage', 'County updated successfully');
	    	}
    	}else{
    		$request->session()->flash('ErrorMessage', 'Please try again, Something went wrong!');
    	}
    	return redirect('admin/locations');
    }

    public function removeCounty(Request $request){
    	if( $county = Counties::find($request->id) ){
    		$county->status = 1;
    		if( !$county->save() ){
	    		App::abort(500, 'Error');
	    	}else{
	    		$request->session()->flash('SuccessMessage', 'County removed successfully');
	    	}
    	}else{
    		$request->session()->flash('ErrorMessage', 'Please try again, Something went wrong!');
    	}
    	return redirect('admin/locations');
    }

    public function countyNameExist($name){
    	return ( Counties::where('county_name',$name)->first() ) ? true : false;
    }
}
