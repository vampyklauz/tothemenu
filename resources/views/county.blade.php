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
				<li>
					<h5><a href="<?php page_url('restaurant/1',$county); ?>">Restaurant Name</a></h5>
					<a href="<?php page_url('restaurant/1',$county); ?>"><img src="<?php echo url('uploads/modern.png'); ?>" alt=""></a>
					<a class="d-block" href="<?php page_url('restaurant/1',$county); ?>">Cusine</a>
					<a class="d-block" href="<?php page_url('restaurant/1',$county); ?>">Town 1</a>
				</li>
				<li>
					<h5><a href="<?php page_url('restaurant/1',$county); ?>">Restaurant Name</a></h5>
					<img src="<?php echo url('uploads/responsive.png'); ?>" alt="">
					<a class="d-block" href="<?php page_url('restaurant/1',$county); ?>">Cusine</a>
					<a class="d-block" href="<?php page_url('restaurant/1',$county); ?>">Town 1</a>
				</li>
				<li>
					<h5><a href="<?php page_url('restaurant/1',$county); ?>">Restaurant Name</a></h5>
					<img src="<?php echo url('uploads/multi.png'); ?>" alt="">
					<a class="d-block" href="<?php page_url('restaurant/1',$county); ?>">Cusine</a>
					<a class="d-block" href="<?php page_url('restaurant/1',$county); ?>">Town 1</a>
				</li>
				<li>
					<h5><a href="<?php page_url('restaurant/1',$county); ?>">Restaurant Name</a></h5>
					<img src="<?php echo url('uploads/modern.png'); ?>" alt="">
					<a class="d-block" href="<?php page_url('restaurant/1',$county); ?>">Cusine</a>
					<a class="d-block" href="<?php page_url('restaurant/1',$county); ?>">Town 1</a>
				</li>
				<li>
					<h5><a href="<?php page_url('restaurant/1',$county); ?>">Restaurant Name</a></h3>
					<img src="<?php echo url('uploads/modern.png'); ?>" alt="">
					<a class="d-block" href="<?php page_url('restaurant/1',$county); ?>">Cusine</a>
					<a class="d-block" href="<?php page_url('restaurant/1',$county); ?>">Town 1</a>
				</li>
				<li>
					<h5><a href="<?php page_url('restaurant/1',$county); ?>">Restaurant Name</a></h5>
					<img src="<?php echo url('uploads/modern.png'); ?>" alt="">
					<a class="d-block" href="<?php page_url('restaurant/1',$county); ?>">Cusine</a>
					<a class="d-block" href="<?php page_url('restaurant/1',$county); ?>">Town 1</a>
				</li>
			</ul>
		</div>
	</div>
	@include('layouts.sidebar-featured')
</div>


@stop

@section('scripts')

@stop