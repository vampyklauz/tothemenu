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
			<h1> Contact us </h1>
		</div><!-- /.page-header -->
	</div>

	@include('layouts.sidebar-featured')

</div>


@stop

@section('scripts')
@stop