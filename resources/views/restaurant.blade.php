@extends('page')

@section('links')
<!-- <link rel="stylesheet" href="link_here"> -->
@stop

@section('content')

<div class="row content-wrap no-m-h">

	@include('layouts.sidebar-place')


	<div class="col-md-7">
		
		<div class="restaurant-owl m-x-auto owl-carousel owl-theme">
		    <div class="item"><img src="{{ url('uploads/restaurants/100_computer_training.jpg') }}" alt=""></div>
		    <div class="item"><img src="{{ url('uploads/restaurants/download3.jpg') }}" alt=""></div>
		    <div class="item"><img src="{{ url('uploads/restaurants/shutterstock_387274792.jpg') }}" alt=""></div>
		</div>

		<div class="profile-user-info">
			<div class="profile-info-row">
				<div class="profile-info-name"> Restaurant Name  </div>

				<div class="profile-info-value">
					<span>{{ $restaurant->name }}</span>
				</div>
			</div>

			<div class="profile-info-row">
				<div class="profile-info-name"> Location </div>

				<div class="profile-info-value">
					<i class="fa fa-map-marker light-orange bigger-110"></i>
					<span> {{ $restaurant->zip.' '.$restaurant->address }}</span>
					<span>{{ $restaurant->city }}</span>
				</div>
			</div>

			<div class="profile-info-row">
				<div class="profile-info-name"> Contact info </div>

				<div class="profile-info-value">
					<span>{{ $restaurant->phone }}</span>
				</div>
			</div>

			<div class="profile-info-row">
				<div class="profile-info-name"> Website </div>

				<div class="profile-info-value">
					<span>{{ $restaurant->website }}</span>
				</div>
			</div>

			<div class="profile-info-row">
				<div class="profile-info-name"> &nbsp; </div>

				<div class="profile-info-value">
					<span>&nbsp;</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="profile-user-info">
					<div class="profile-info-row">
						<div class="profile-info-name"> Cuisine </div>

						<div class="profile-info-value">
							<span>{{ $restaurant->cuisine }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Open for </div>

						<div class="profile-info-value">
							@foreach(json_decode($restaurant->service,true) as $service)
								<span>{{ $service }}</span>
							@endforeach
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Alcohol </div>

						<div class="profile-info-value">
							@foreach(json_decode($restaurant->alcohol,true) as $alcohol)
								<span>{{ $alcohol }}</span>
							@endforeach
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Dress Code </div>

						<div class="profile-info-value">
							@foreach(json_decode($restaurant->dress_code,true) as $dress_code)
								<span>{{ $dress_code }}</span>
							@endforeach
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Payment Types </div>

						<div class="profile-info-value">
							@foreach(json_decode($restaurant->payment,true) as $payment)
								<span>{{ $payment }}</span>
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="profile-user-info">
					<div class="profile-info-row">
						<div class="profile-info-name"> Features </div>

						<div class="profile-info-value">
							<span> </span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Reservations </div>

						<div class="profile-info-value">
							<span>Reccommended</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Restaurant Hours </div>

						<div class="profile-info-value">
							<span>Now Open</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> M-Th. </div>

						<div class="profile-info-value">
							<span>11:00am - 9:30 pm</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> F - Sat. </div>

						<div class="profile-info-value">
							<span>11:00am - 11:00pm</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="map-wrap m-top-40 p-h-15">
			<img src="{{ url('uploads/restaurants/map.png') }}" alt="">
		</div>
	</div>

	

	@include('layouts.sidebar-featured')

</div>


@stop

@section('scripts')
<script>
	$('.owl-carousel').owlCarousel({
		stagePadding: 50,
	    loop:true,
	    margin:10,
	    nav:false,
	    center: true,
	    autoHeight:true,
	    responsive:{
	        0:{
	            items:1
	        }
	    }
	})
</script>
@stop