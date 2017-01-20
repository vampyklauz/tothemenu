<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Counties;
use App\Restaurants;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page)
    {
        $breadcrumbs = breadcrumbs(array('county'=>$page));
        $county = $page;
        $counties = Counties::where('state_id',1)->where('status',0)->get();
        $restaurants = Restaurants::where('county',$page)->where('status',0)->get();
        return view('county',compact('breadcrumbs','county','counties','restaurants'));
    }

    public function about(){
       
        $page = ( isset($_GET['county']) ) ? $_GET['county'] : '';
        $breadcrumbs = breadcrumbs(array('county'=>$page));
        $county = $page;
        $counties = Counties::where('state_id',1)->where('status',0)->get();
        return view('about',compact('breadcrumbs','county','counties'));
    }

    public function contact(){
        $page = ( isset($_GET['county']) ) ? $_GET['county'] : '';
        $breadcrumbs = breadcrumbs(array('county'=>$page));
        $county = $page;
        $counties = Counties::where('state_id',1)->where('status',0)->get();
        return view('contact',compact('breadcrumbs','county','counties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function myPage(){
        $page = ( isset($_GET['county']) ) ? $_GET['county'] : '';
        $breadcrumbs = breadcrumbs(array('county'=>$page));
        $county = $page;
        return view('mypage',compact('breadcrumbs','county'));
    }
}
