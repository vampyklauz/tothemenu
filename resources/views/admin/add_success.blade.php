@extends('page')

@section('links')
<!-- <link rel="stylesheet" href="link_here"> -->
@stop

@section('content')
	<div class="row content-wrap no-m-h">

	@include('layouts.sidebar-place')


	<div class="col-md-7">
		<div>
			<div class="well">
				<h1 class="grey lighter smaller">
					<span class="green bigger-125">
						<i class="ace-icon fa fa-check"></i>
					</span>
					Successful
				</h1>

				<hr />
				<h3 class="lighter smaller">
					Your restaurant has been added to our directory
				</h3>

				<div class="space"></div>

				<div>
					<h4 class="lighter smaller">Meanwhile, try one of the following:</h4>

					<ul class="list-unstyled spaced inline bigger-110 margin-15">
						<li>
							<i class="ace-icon fa fa-hand-o-right blue"></i>
							Read the faq
						</li>

						<li>
							<i class="ace-icon fa fa-hand-o-right blue"></i>
							Give us more info on how this specific error occurred!
						</li>
					</ul>
				</div>

				<hr />
				<div class="space"></div>

				<div class="center">
					<a href="../" class="btn btn-primary">
						<i class="ace-icon fa fa-home"></i>
						Home
					</a>
				</div>
			</div>
		</div>
	</div>

	

	@include('layouts.sidebar-featured')

</div>
@stop

@section('scripts')
<!-- <script src="script_here"></script> -->
@stop