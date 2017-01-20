
@extends('base')

@section('links')
<!-- <link rel="stylesheet" href="link_here"> -->
<link rel="stylesheet" href="{{ url('assets/css/jquery-ui.css') }}" />
<link rel="stylesheet" href="{{ url('assets/css/bootstrap-editable.css') }}" />
@stop

@section('content')
	<div class="page-header">
		<h1>
			{{ $restaurant->name }}
		</h1>
	</div><!-- /.page-header -->

	<div class="profile-user-info profile-user-info-striped">
		<div class="profile-info-row">
			<div class="profile-info-name"> Address </div>

			<div class="profile-info-value">
				<span class="" id="address"> {{ $restaurant->address }} </span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"></div>

			<div class="profile-multi-item profile-info-value">
				<small class="text-info">City: </small> <p class="" id="city"> {{ $restaurant->city }} </p>
				<small class="text-info">State: </small> <p class="" id="state"> {{ $restaurant->state }} </p>
				<small class="text-info">Zip: </small> <p class="" id="zip"> {{ $restaurant->zip }} </p>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> County </div>

			<div class="profile-info-value">
				<span class="" id="county"></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> Email </div>

			<div class="profile-info-value">
				<span class="" id="email"></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> Phone </div>

			<div class="profile-info-value">
				<span class="" id="phone"></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> fax </div>

			<div class="profile-info-value">
				<span class="" id="fax"></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> Website </div>

			<div class="profile-info-value">
				<span class="" id="website"></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> Cusine </div>

			<div class="profile-info-value">
				<span class="" id="cusine"></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> Service </div>

			<div class="profile-info-value">
				<span class="" id="service"></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> Alcohol </div>

			<div class="profile-info-value">
				<span class="" id="alcohol"></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> Dress Code </div>

			<div class="profile-info-value">
				<span class="" id="dress_code"></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> Payment </div>

			<div class="profile-info-value">
				<span class="" id="payment"></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> Features </div>

			<div class="profile-info-value">
				<span class="" id="features"></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> Restaurant Hours </div>

			<div class="profile-info-value">
				<span class="" id="restaurant_hour"></span>
			</div>
		</div>
		<div class="profile-info-row">
			<div class="profile-info-name"> Reservations </div>

			<div class="profile-info-value">
				<span class="" id="reservations"></span>
			</div>
		</div>
	</div>
@stop

@section('scripts')

<script src="{{ url('assets/js/jquery-ui.js') }}"></script>
<script src="{{ url('assets/js/jquery.gritter.js') }}"></script>
<script src="{{ url('assets/js/x-editable/bootstrap-editable.js') }}"></script>
<script src="{{ url('assets/js/x-editable/ace-editable.js') }}"></script>

<script type="text/javascript">
jQuery(function($) {

	//editables on first profile page
	$.fn.editable.defaults.mode = 'inline';
	$.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
	$.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
	                            '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    editable_text(['address','city','state','zip']);

});

function editable_text(array){
	$.each(array,function(k,v){
		$('#'+v)
		.editable({
			type: 'text',
			name: v,
			pk: '{{ $restaurant->id }}',
			url: '{{ url('admin/editRestaurant') }}',
			success: function(response, newValue) {
				console.log(response);
			},
			error: function(response, newValue) {
	            if(response.status === 500) {
	                return 'Service unavailable. Please try later.';
	            }
	        }
	    });
	});
}

</script>
@stop