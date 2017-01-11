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
			<h1> Add a Menu </h1>
		</div><!-- /.page-header -->
	
					

	<div class="head">
		<h3>Submit a Menu</h3>
	</div><!-- end /.head -->
	
	<div class="content">
		<p>Is there a restaurant menu that you'd like to see in the totheMenu?</p>
		<p>Fill out and submit the simple form below and we'll go and get it.</p>
		<p><strong class="important">Please Note: We are only accepting menus for the New Jersey areas at this time.</strong></p>
	
		<form id="submitmenu" name="submitmenu" method="post" action="/submitmenu/post/">
			<ul>
				<li class="input-txt" id="restaurant_name-wrp">
						
						<label>Restaurant Name <span class="required">required</span></label>
						<div class="focus-msg"><p>ex: Raj's Bistro & Bar</p></div>
						<div class="input-wrp"><input id="id_restaurant_name" type="text" name="restaurant_name" maxlength="100" /></div>
				</li>
				<li class="input-txt" id="restaurant_address-wrp">
						
						<label>Restaurant Address</label>
						<div class="focus-msg"><p>please Include any cross street, if applicable</p></div>
						<div class="input-wrp"><textarea id="id_restaurant_address" rows="4" cols="40" name="restaurant_address"></textarea></div>
				</li>
				<li class="input-txt" id="phone_number-wrp">
						
						<label>Restaurant Phone Number</label>
						<div class="focus-msg"><p>(xxx) xxx-xxxx</p></div>
						<div class="input-wrp"><input type="text" name="phone_number" id="id_phone_number" /></div>
				</li>
				<li class="input-txt" id="email_address-wrp">
						
						<label>Your E-Mail Address</label>
						<div class="input-wrp"><input type="text" name="email_address" id="id_email_address" /></div>
				</li>
				<li class="input-txt" id="comments-wrp">
						
						<label>Comments</label>
						<div class="focus-msg"><p>tell us more about the restaurant</p></div>
						<div class="input-wrp"><textarea id="id_comments" rows="10" cols="40" name="comments"></textarea></div>
				</li>
				<div class="input-wrp"><input type="hidden" name="address2" id="id_address2" /></div>
				<li class="submit-btn"><div class="input-wrp"><input class="button" type="submit" value="Submit" id="submit1" name="submit1" onclick="document.getElementById('id_address2').value = '     '"/></div>
				</li>
			</ul>
		</form>
	</div><!-- end content -->

	</div>
			             
                        
    @include('layouts.sidebar-featured')                    
				
</div>


@stop

@section('scripts')
@stop