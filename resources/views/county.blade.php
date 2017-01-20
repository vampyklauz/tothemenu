@extends('page')

@section('links')
<!-- <link rel="stylesheet" href="link_here"> -->
@stop

@section('content')

<div class="row content-wrap m-top-40">

	@include('layouts.sidebar-place')

	<div class="col-md-7">
		<div class="item-wrap">
			<ul>
				@foreach( $restaurants as $restaurant )
				<li>
					<h5><a href="{{ page_url('restaurant/'.$restaurant->id,$county) }}"> {{ $restaurant->name }} </a></h5>
					<a href="{{ page_url('restaurant/'.$restaurant->id,$county) }}"><img src="{{ url('uploads/modern.png')}}" alt=""></a>
					<a class="d-block" href="{{ page_url('restaurant/'.$restaurant->id,$county)}}">{{ $restaurant->cuisine }}</a>
					<a class="d-block" href="{{ page_url('restaurant/'.$restaurant->id,$county)}}">Town 1</a>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
	@include('layouts.sidebar-featured')
</div>


@stop

@section('scripts')

@stop