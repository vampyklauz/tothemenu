
@extends('base')

@section('links')
<!-- <link rel="stylesheet" href="link_here"> -->
<link rel="stylesheet" href="{{ url('assets/css/jquery-ui.css') }}" />
@stop

@section('content')

<div>
	<div class="page-header">
		<h1 class="orange"> 
			Cuisine
			<div class="pull-right inline">
				@if( Session::has('SuccessMessage') )
					<span class="response_message label label-success label-white middle">{{ Session::get('SuccessMessage') }}</span>
				@endif
				@if( Session::has('ErrorMessage') )
					<span class="response_message label label-warning label-white middle">
						<i class="ace-icon fa fa-exclamation-triangle bigger-120"></i>
						{{ Session::get('ErrorMessage') }}
					</span>
				@endif
				<button id="btn_add_Cuisine" class="btn btn-sm btn-success">Add Cuisine <i class="ace-icon fa fa-plus icon-on-right"></i></button>
			</div>
		</h1>
		
		
	</div>
	<div class="row">
			<div class="col-xs-6">
				<div>
				<table id="dynamic-table" class="col-xs-12 table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="hidden-480">ID</th>
							<th>Cuisine Name</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($cuisines as $cuisine)
						<tr data-all="{{ $cuisine }}">
							<td>{{ $cuisine->id }}</td>
							<td>{{ $cuisine->name }}</td>

							<td>
								<div class="hidden-sm hidden-xs action-buttons text-center">
									<a class="btn-edit blue" href="#">
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>

									<a class="btn-remove red" href="#">
										<i class="ace-icon fa fa-trash-o bigger-130"></i>
									</a>
								</div>

								<div class="hidden-md hidden-lg">
									<div class="inline pos-rel">
										<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
											<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
										</button>

										<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
											<li>
												<a href="#" class="btn-edit tooltip-success" data-rel="tooltip" title="Edit">
													<span class="blue">
														<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
													</span>
												</a>
											</li>

											<li>
												<a href="#" class="btn-remove tooltip-error" data-rel="tooltip" title="Delete">
													<span class="red">
														<i class="ace-icon fa fa-trash-o bigger-120"></i>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				</div>
			</div>
		</div>
</div>

<!-- MODALS -->
<div id="dialog-add-cuisine" class="hide">
	<form id="form-cuisine" class="form-horizontal" role="form" method="POST" action="{{ url('admin/addCuisine') }}">
		{{ csrf_field() }}
		<div class="form-group">
			<label class="col-sm-4 control-label no-padding-right" for="cuisine_name"> Cuisine Name </label>

			<div class="col-sm-8">
				<input type="text" id="cuisine_name" name="cuisine_name" placeholder="Name" class="col-xs-12" />
			</div>
		</div>
		<input type="submit" class="hidden">
	</form>
</div><!-- #dialog-add-cuisine -->

<div id="dialog-edit-cuisine" class="hide">
	<form id="form-cuisine-edit" class="form-horizontal" role="form" method="POST" action="{{ url('admin/editCuisine') }}">
		{{ csrf_field() }}
		<input type="hidden" id="edit_cuisine_id" name="id">
		<div class="form-group">
			<label class="col-sm-4 control-label no-padding-right" for="cuisine_name"> Cuisine Name </label>

			<div class="col-sm-8">
				<input type="text" id="edit_cuisine_name" name="cuisine_name" placeholder="Name" class="col-xs-12" />
			</div>
		</div>
		<input type="submit" class="hidden">
	</form>
</div><!-- #dialog-add-cuisine -->
<!-- End MODALS -->

<div id="dialog-remove-cuisine" class="hide">
	<form id="form-cuisine-remove" class="form-horizontal" role="form" method="POST" action="{{ url('admin/removeCuisine') }}">
		{{ csrf_field() }}
		<input type="hidden" id="remove_cuisine_id" name="id">
		Are you sure you want to remove <span id="remove_cuisine_name"></span>
	</form>
</div><!-- #dialog-add-cuisine -->
<!-- End MODALS -->


@stop

@section('scripts')

<script src="{{ url('assets/js/jquery-ui.js') }}"></script>

<script src="{{ url('assets/js/dataTables/jquery.dataTables.js') }}"></script>
<script src="{{ url('assets/js/dataTables/jquery.dataTables.bootstrap.js') }}"></script>
<script src="{{ url('assets/js/dataTables/extensions/TableTools/js/dataTables.tableTools.js') }}"></script>
<script src="{{ url('assets/js/dataTables/extensions/ColVis/js/dataTables.colVis.js') }}"></script>

<script type="text/javascript">
	jQuery(function($) {
		$('.response_message').delay(5000).slideUp(300);
		//initiate dataTables plugin
		var oTable1 = 
		$('#dynamic-table')
		//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
		.dataTable( {
			bAutoWidth: false,
			"aoColumns": [
			  { "bSortable": false },
			  null,
			  { "bSortable": false }
			],
			"aaSorting": [],
	
			//,
			//"sScrollY": "200px",
			//"bPaginate": false,
	
			//"sScrollX": "100%",
			//"sScrollXInner": "120%",
			//"bScrollCollapse": true,
			//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
			//you may want to wrap the table inside a "div.dataTables_borderWrap" element
	
			//"iDisplayLength": 50
	    } );

	    //override dialog's title function to allow for HTML titles
		$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
			_title: function(title) {
				var $title = this.options.title || '&nbsp;'
				if( ("title_html" in this.options) && this.options.title_html == true )
					title.html($title);
				else title.text($title);
			}
		}));

	    // Add modal Functions
		$( "#btn_add_Cuisine" ).on('click', function(e) {
			e.preventDefault();

			var dialog = $( "#dialog-add-cuisine" ).removeClass('hide').dialog({
				modal: true,
				title: "<div class='widget-header widget-header-small green'><h4 class='smaller'><i class='ace-icon fa fa-plus'></i> Add Cuisine</h4></div>",
				title_html: true,
				width: 400,
				buttons: [ 
					{
						text: "Cancel",
						"class" : "btn btn-minier",
						click: function() {
							$( this ).dialog( "close" ); 
						} 
					},
					{
						text: "Add",
						"class" : "btn btn-success btn-minier",
						click: function() {
							$('#form-cuisine').submit();
						} 
					}
				]
			});
		});

		// Remove modal Functions
		$( ".btn-remove" ).on('click', function(e) {
			e.preventDefault();
			// Fill form with data from table
			var trow = $(this).closest('tr');
			var data = trow.data('all');
			$('#remove_cuisine_id').val(data.id);
			$('#remove_cuisine_name').html(data.name);

			var dialog = $( "#dialog-remove-cuisine" ).removeClass('hide').dialog({
				modal: true,
				title: "<div class='widget-header widget-header-small red'><h4 class='smaller'><i class='ace-icon fa fa-trash'></i> Remove Cuisine</h4></div>",
				title_html: true,
				width: 400,
				buttons: [ 
					{
						text: "Cancel",
						"class" : "btn btn-minier",
						click: function() {
							$( this ).dialog( "close" ); 
						} 
					},
					{
						text: "Remove",
						"class" : "btn btn-danger btn-minier",
						click: function() {
							$('#form-cuisine-remove').submit();
						} 
					}
				]
			});
		});

		// Edit modal Functions
		$( ".btn-edit" ).on('click', function(e) {
			e.preventDefault();
			// Fill form with data from table
			var trow = $(this).closest('tr');
			var data = trow.data('all');
			$('#edit_cuisine_id').val(data.id);
			$('#edit_cuisine_name').val(data.name);

			var dialog = $( "#dialog-edit-cuisine" ).removeClass('hide').dialog({
				modal: true,
				title: "<div class='widget-header widget-header-small blue'><h4 class='smaller'><i class='ace-icon fa fa-pencil'></i> Edit Cuisine</h4></div>",
				title_html: true,
				width: 400,
				buttons: [ 
					{
						text: "Cancel",
						"class" : "btn btn-minier",
						click: function() {
							$( this ).dialog( "close" ); 
						} 
					},
					{
						text: "Edit",
						"class" : "btn btn-primary btn-minier",
						click: function() {
							$('#form-cuisine-edit').submit();
						} 
					}
				]
			});
		});

	
	})
</script>
@stop