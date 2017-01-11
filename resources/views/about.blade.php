@extends('page')

@section('links')
<!-- <link rel="stylesheet" href="link_here"> -->
@stop

@section('content')

<div class="row content-wrap no-m-h">

	@include('layouts.sidebar-place')


	<div class="col-md-7">
		<!-- /section:settings.box -->
		<div class="page-header">
			<h1> About us </h1>
				</div><!-- /.page-header -->
		<h5> We are here to help you find all the restaurants, that are in your local areas. 
		<br>Your Favorite ones, as well as the ones you didn't know were there.</br>
		<br>Check out the Restaurants and their menus. </br>
		<br> Bringing you newest restaurants in your area, everyday. </br>
		<br> If you don't see a menu of your local restaurant, shoot us out an e-mail with some basic information "Name of the Restaurant" "Phone Number" "Town" we will try to add it, at the earliest.</br> 
		 </h5>

	</div>

	@include('layouts.sidebar-featured')

</div>


@stop

@section('scripts')
@stop