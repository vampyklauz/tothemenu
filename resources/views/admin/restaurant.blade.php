@extends('page')

@section('links')
<!-- <link rel="stylesheet" href="link_here"> -->
@stop

@section('content')

<div class="row content-wrap no-m-h">

	@include('layouts.sidebar-place')


	<div class="col-md-7">
		<div class="page-header">
			<h1 class="blue"> 
				Restaurant registration
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					Please provide us your information.
				</small>
			</h1>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<form id="registration_form" class="form-horizontal big-input" action="{{ url('register/addRestaurant') }}"  method="POST" role="form">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group no-margin-bottom">
								<div class="col-xs-12">
									<label class="control-label">Name of Restaurant</label>
									<input class="col-xs-12" validate="true" name="name" type="text">
								</div>
							</div>
							<div class="form-group no-margin-bottom">
								<div class="col-xs-12">
									<label class="control-label">Address</label>
									<textarea class="col-sm-12 textarea-2" name="address" validate="true" placeholder="Restaurant address..."></textarea>
								</div>
							</div>
							<div class="form-group no-margin-bottom">
								<div class="col-xs-6">
									<label class="control-label">State</label>
									<select class="chosen-select form-control" name="state" data-placeholder="Choose a State...">
										<option value="">  </option>
										<option value="AL">Alabama</option>
										<option value="AK">Alaska</option>
										<option value="AZ">Arizona</option>
										<option value="AR">Arkansas</option>
										<option value="CA">California</option>
										<option value="CO">Colorado</option>
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="HI">Hawaii</option>
										<option value="ID">Idaho</option>
										<option value="IL">Illinois</option>
										<option value="IN">Indiana</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="ME">Maine</option>
										<option value="MD">Maryland</option>
										<option value="MA">Massachusetts</option>
										<option value="MI">Michigan</option>
										<option value="MN">Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="MT">Montana</option>
										<option value="NE">Nebraska</option>
										<option value="NV">Nevada</option>
										<option value="NH">New Hampshire</option>
										<option value="NJ">New Jersey</option>
										<option value="NM">New Mexico</option>
										<option value="NY">New York</option>
										<option value="NC">North Carolina</option>
										<option value="ND">North Dakota</option>
										<option value="OH">Ohio</option>
										<option value="OK">Oklahoma</option>
										<option value="OR">Oregon</option>
										<option value="PA">Pennsylvania</option>
										<option value="RI">Rhode Island</option>
										<option value="SC">South Carolina</option>
										<option value="SD">South Dakota</option>
										<option value="TN">Tennessee</option>
										<option value="TX">Texas</option>
										<option value="UT">Utah</option>
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WA">Washington</option>
										<option value="WV">West Virginia</option>
										<option value="WI">Wisconsin</option>
										<option value="WY">Wyoming</option>
									</select>
								</div>
								<div class="col-xs-6">
									<label class="control-label">County</label>
									<input class="col-xs-12" validate="true" name="country" type="text">
								</div>
							</div>

							<div class="form-group no-margin-bottom">
								<div class="col-xs-6">
									<label class="control-label">City</label>
									<input class="col-xs-12" validate="true" name="city" type="text">
								</div>
								<div class="col-xs-6">
									<label class="control-label">Zip</label>
									<input class="col-xs-12" validate="true" name="zip" type="text">
								</div>
							</div>

							<div class="form-group no-margin-bottom">
								<div class="col-xs-6">
									<label class="control-label">Phone</label>
									<input class="col-xs-12" validate="true" name="phone" type="text">
								</div>
								<div class="col-xs-6">
									<label class="control-label">Fax</label>
									<input class="col-xs-12" validate="true" name="fax" type="text">
								</div>
							</div>
							<div class="form-group no-margin-bottom">
								<div class="col-xs-6">
									<label class="control-label">Cuisine</label>
									<input class="col-xs-12" validate="true" name="first_name" type="text">
								</div>
								<div class="col-xs-6">
									<label class="control-label">Features</label>
									<input class="col-xs-12" validate="true" name="first_name" type="text">
								</div>
							</div>
							<div class="form-group no-margin-bottom">
								<div class="col-xs-12">
									<label class="control-label">Website</label>
									<input class="col-xs-12" validate="true" name="website" type="text">
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group no-margin-bottom">
								<div class="col-xs-12">
									<label class="control-label">Owners Name</label>
									<input class="col-xs-12" validate="true" name="owners_name" type="text">
								</div>
							</div>
							<div class="col-xs-12 no-padding border-bottom">
								<label class="control-label">Service</label>
								<div class="col-xs-12 has-checkbox no-padding">
									<label class="m-right-20">
										<input class="ace" validate="true" name="service[]" value="Breakfast" type="checkbox">
										<span class="lbl bigger-100"> Breakfast</span>
									</label>
									<label class="m-right-20">
										<input class="ace" validate="true" name="service[]" value="Lunch" type="checkbox">
										<span class="lbl bigger-100"> Lunch</span>
									</label>
									<label class="m-right-20">
										<input class="ace" validate="true" name="service[]" value="Dinner" type="checkbox">
										<span class="lbl bigger-100"> Dinner</span>
									</label>									
								</div>
							</div>
							<div class="col-xs-12 no-padding border-bottom">
								<label class="control-label">Alcohol</label>
								<div class="col-xs-12 has-checkbox no-padding">
									<label class="m-right-20">
										<input class="ace" validate="true" name="alcohol" value="No" type="checkbox">
										<span class="lbl bigger-100"> No</span>
									</label>
									<label class="m-right-20">
										<input class="ace" validate="true" name="alcohol" value="Wine Bar" type="checkbox">
										<span class="lbl bigger-100"> Wine Bar</span>
									</label>
									<label class="m-right-20">
										<input class="ace" validate="true" name="alcohol" value="Full Bar" type="checkbox">
										<span class="lbl bigger-100"> Full Bar</span>
									</label>
									<label class="m-right-20">
										<input class="ace" validate="true" name="alcohol" value="BYOB" type="checkbox">
										<span class="lbl bigger-100"> BYOB</span>
									</label>									
								</div>
							</div>
							<div class="col-xs-12 no-padding border-bottom">
								<label class="control-label">Dress Code</label>
								<div class="col-xs-12 has-checkbox no-padding">
									<label class="m-right-20">
										<input class="ace" validate="true" name="dress_code" value="Casual" type="checkbox">
										<span class="lbl bigger-100"> Casual</span>
									</label>
									<label class="m-right-20">
										<input class="ace" validate="true" name="dress_code" value="Dress to Impress" type="checkbox">
										<span class="lbl bigger-100"> Dress to Impress</span>
									</label>
									<label class="m-right-20">
										<input class="ace" validate="true" name="dress_code" value="Chic" type="checkbox">
										<span class="lbl bigger-100"> Chic</span>
									</label>
									<label class="m-right-20">
										<input class="ace" validate="true" name="dress_code" value="Jacket Required" type="checkbox">
										<span class="lbl bigger-100"> Jacket Required</span>
									</label>	
									<label class="m-right-20">
										<input class="ace" validate="true" name="dress_code" value="Formal" type="checkbox">
										<span class="lbl bigger-100"> Formal</span>
									</label>									
								</div>
							</div>
							<div class="col-xs-12 no-padding border-bottom">
								<label class="control-label">Payment Types</label>
								<div class="col-xs-12 has-checkbox no-padding">
									<label class="m-right-20">
										<input class="ace" validate="true" name="payment" value="Cash Only" type="checkbox">
										<span class="lbl bigger-100"> Cash Only</span>
									</label>
									<label class="m-right-20">
										<input class="ace" validate="true" name="payment" value="Amex" type="checkbox">
										<span class="lbl bigger-100"> Amex</span>
									</label>
									<label class="m-right-20">
										<input class="ace" validate="true" name="payment" value="Discover" type="checkbox">
										<span class="lbl bigger-100"> Discover</span>
									</label>
									<label class="m-right-20">
										<input class="ace" validate="true" name="payment" value="Mastercard" type="checkbox">
										<span class="lbl bigger-100"> Mastercard</span>
									</label>	
									<label class="m-right-20">
										<input class="ace" validate="true" name="payment" value="Visa" type="checkbox">
										<span class="lbl bigger-100"> Visa</span>
									</label>									
								</div>
							</div>
							<div class="col-xs-12 no-padding border-bottom">
								<label class="control-label">Restaurant Hours</label>
								<div class="col-xs-12 has-checkbox no-padding">
									<label alt="Sunday">
										<input class="ace" validate="true" name="hours" value="Sun" type="checkbox">
										<span class="lbl bigger-100"> Sun</span>
									</label>
									<label class="m-right-3">
										<input class="ace" validate="true" name="hours" value="Mon" type="checkbox">
										<span class="lbl bigger-100"> Mon</span>
									</label>
									<label class="m-right-3">
										<input class="ace" validate="true" name="hours" value="Tue" type="checkbox">
										<span class="lbl bigger-100"> Tue</span>
									</label>
									<label class="m-right-3">
										<input class="ace" validate="true" name="hours" value="Wed" type="checkbox">
										<span class="lbl bigger-100"> Wed</span>
									</label>
									<label class="m-right-3">
										<input class="ace" validate="true" name="hours" value="Thu" type="checkbox">
										<span class="lbl bigger-100"> Thu</span>
									</label>
									<label class="m-right-3">
										<input class="ace" validate="true" name="hours" value="Fri" type="checkbox">
										<span class="lbl bigger-100"> Fri</span>
									</label>
									<label class="m-right-3">
										<input class="ace" validate="true" name="hours" value="Sat" type="checkbox">
										<span class="lbl bigger-100"> Sat</span>
									</label>										
								</div>
							</div>
							<div class="form-group no-margin-bottom">
								<div class="col-xs-6">
									<label class="control-label">Hot Menus</label>
									<input class="col-xs-12" validate="true" name="first_name" type="text">
								</div>
								<div class="col-xs-6">
									<label class="control-label">Hot Menu Date</label>
									<input class="col-xs-12" validate="true" name="first_name" type="text">
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix form-actions col-lg-12 no-padding-left align-right">
						<div class="col-lg-12 col-xs-12">
							<button class="btn" type="reset">
								<i class="ace-icon fa fa-undo bigger-110"></i>
								Reset
							</button>
							<button id="register_btn" class="btn btn-primary">
								<i class="ace-icon fa fa-pencil-square-o bigger-110"></i>
								Register
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</div>

	@include('layouts.sidebar-featured')

</div>


@stop

@section('scripts')

<script type="text/javascript">
			jQuery(function($) {
	if(!ace.vars['touch']) {
	$('.chosen-select').chosen({allow_single_deselect:true}); 
	//resize the chosen on window resize

	$(window)
	.off('resize.chosen')
	.on('resize.chosen', function() {
		$('.chosen-select').each(function() {
			 var $this = $(this);
			 $this.next().css({'width': $this.parent().width()});
		})
	}).trigger('resize.chosen');
	//resize chosen on sidebar collapse/expand
	$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
		if(event_name != 'sidebar_collapsed') return;
		$('.chosen-select').each(function() {
			 var $this = $(this);
			 $this.next().css({'width': $this.parent().width()});
		})
	});


	$('#chosen-multiple-style .btn').on('click', function(e){
		var target = $(this).find('input[type=radio]');
		var which = parseInt(target.val());
		if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
		 else $('#form-field-select-4').removeClass('tag-input-style');
	});
	}
</script>
@stop