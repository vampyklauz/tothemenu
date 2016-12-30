@extends('page')

@section('links')
<!-- <link rel="stylesheet" href="link_here"> -->
@stop

@section('content')

<div class="row content-wrap m-top-40 no-m-h">

	@include('layouts.sidebar-place')


	<div class="col-md-7">
		About us
	</div>

	@include('layouts.sidebar-featured')

</div>


@stop

@section('scripts')
@stop