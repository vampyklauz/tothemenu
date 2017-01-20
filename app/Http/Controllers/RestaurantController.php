<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Counties;
use App\Http\Controllers\Controller;
use App\Restaurants;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct($page = ''){
        $page = ( isset($page) && $page != '' ) ? $page : ( isset($_GET['county']) ) ? $_GET['county'] : '';
        $data['breadcrumbs'] = breadcrumbs(array('county'=>$page));
        $data['county'] = $page;
        $data['counties'] = $counties = Counties::where('state_id',1)->where('status',0)->get();
        $this->data = $data;
    }

    public function index($id)
    {
        $this->data['restaurant'] = Restaurants::find($id);
        return view('restaurant',$this->data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin/restaurant-registration',$this->data);
    }

    public function Restaurant_info($id)
    {  
        $this->data['restaurant'] = Restaurants::find($id);
        return view('admin/restaurant-info',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addRestaurant(Request $request)
    {
        $restaurant = new Restaurants;
        $restaurant->name = $request->input('name');
        $restaurant->address = $request->input('address');
        $restaurant->state = $request->input('state');
        $restaurant->county = $request->input('county');
        $restaurant->city = $request->input('city');
        $restaurant->zip = $request->input('zip');
        $restaurant->phone = $request->input('phone');
        $restaurant->fax = $request->input('fax');
        $restaurant->website = $request->input('website');
        $restaurant->owners_name = $request->input('owners_name');
        $restaurant->service = json_encode( $request->input('service') );
        $restaurant->alcohol = json_encode( $request->input('alcohol') );
        $restaurant->dress_code = json_encode( $request->input('dress_code') );
        $restaurant->payment = json_encode( $request->input('payment') );
        $restaurant->restaurant_hour = json_encode( $request->input('hours') );

        if( !$restaurant->save() ){
            App::abort(500, 'Error');
        }

        return redirect('register/addSuccess');
    }

    public function addSuccess()
    {
        return view('admin/add_success',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editRestaurant(Request $request)
    {
        print_r($request->input());exit();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
