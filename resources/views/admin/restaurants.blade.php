
@extends('base')

@section('links')
<!-- <link rel="stylesheet" href="link_here"> -->
<link rel="stylesheet" href="{{ url('assets/css/jquery-ui.css') }}" />
@stop

@section('content')

<div>
	<div class="page-header">
		<h1 class="green"> 
			Restaurants
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				List of all restaurants
			</small>

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
				<button id="btn_add_county" class="btn btn-sm btn-success">Add County <i class="ace-icon fa fa-plus icon-on-right"></i></button>
			</div>
		</h1>
		
		
	</div>
	<div class="row">
			<div class="col-xs-12">
				<!-- <div class="btn-group">
					<button data-toggle="dropdown" class="btn btn-primary btn-white dropdown-toggle">
						Select a state
						<i class="ace-icon fa fa-angle-down icon-on-right"></i>
					</button>
				
					<ul class="dropdown-menu">
						<li>
							<a href="1">NJ</a>
						</li>
					</ul>
				</div>/.btn-group -->
				<div>
				<table id="dynamic-table" class="col-xs-12 table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="hidden-480">ID</th>
							<th>Restaurant Name</th>
							<th>County</th>
							<th>Cuisine</th>
							<th>Phone</th>
							<th>Owner</th>
							<th>Actions</th>
						</tr>
					</thead>
						@foreach ($restaurants as $restaurant)
						<tr data-all="{{ $restaurant }}">
							<td>{{ $restaurant->id }}</td>
							<td>{{ $restaurant->name }}</td>
							<td>{{ $restaurant->county }}</td>
							<td>{{ $restaurant->cuisine }}</td>
							<td>{{ $restaurant->phone }}</td>
							<td>{{ $restaurant->owners_id }}</td>
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
					<tbody>
						
					</tbody>
				</table>
				</div>
			</div>
		</div>
</div>

<!-- MODALS -->
<div id="dialog-add-county" class="hide">
	<form id="form-county" class="form-horizontal" role="form" method="POST" action="{{ url('admin/addCounty') }}">
		{{ csrf_field() }}
		<div class="form-group">
			<label class="col-sm-4 control-label no-padding-right" for="county_name"> County Name </label>

			<div class="col-sm-8">
				<input type="text" id="county_name" name="county_name" placeholder="Name" class="col-xs-12" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label no-padding-right" for="county_link"> County Link </label>

			<div class="col-sm-8">
				<input type="text" id="county_link" name="county_link" placeholder="Link" class="col-xs-12" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label no-padding-right" for="county_code"> County Code </label>

			<div class="col-sm-8">
				<input type="text" id="county_code" name="county_code" placeholder="Code" class="col-xs-12" />
			</div>
		</div>

		<input type="submit" class="hidden">
	</form>
</div><!-- #dialog-add-county -->

<div id="dialog-edit-county" class="hide">
	<form id="form-county-edit" class="form-horizontal" role="form" method="POST" action="{{ url('admin/editCounty') }}">
		{{ csrf_field() }}
		<input type="hidden" id="edit_county_id" name="id">
		<div class="form-group">
			<label class="col-sm-4 control-label no-padding-right" for="county_name"> County Name </label>

			<div class="col-sm-8">
				<input type="text" id="edit_county_name" name="county_name" placeholder="Name" class="col-xs-12" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label no-padding-right" for="county_link"> County Link </label>

			<div class="col-sm-8">
				<input type="text" id="edit_county_link" name="county_link" placeholder="Link" class="col-xs-12" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label no-padding-right" for="county_code"> County Code </label>

			<div class="col-sm-8">
				<input type="text" id="edit_county_code" name="county_code" placeholder="Code" class="col-xs-12" />
			</div>
		</div>

		<input type="submit" class="hidden">
	</form>
</div><!-- #dialog-add-county -->
<!-- End MODALS -->

<div id="dialog-remove-county" class="hide">
	<form id="form-county-remove" class="form-horizontal" role="form" method="POST" action="{{ url('admin/removeCounty') }}">
		{{ csrf_field() }}
		<input type="hidden" id="remove_county_id" name="id">
		Are you sure you want to remove <span id="remove_county_name"></span>
	</form>
</div><!-- #dialog-add-county -->
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
			  null, null, null,
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
		$( "#btn_add_county" ).on('click', function(e) {
			e.preventDefault();

			var dialog = $( "#dialog-add-county" ).removeClass('hide').dialog({
				modal: true,
				title: "<div class='widget-header widget-header-small green'><h4 class='smaller'><i class='ace-icon fa fa-plus'></i> Add County</h4></div>",
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
							$('#form-county').submit();
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
			$('#edit_county_id').val(data.id);
			$('#edit_county_name').val(data.county_name);
			$('#edit_county_link').val(data.county_link);
			$('#edit_county_code').val(data.county_code);

			var dialog = $( "#dialog-edit-county" ).removeClass('hide').dialog({
				modal: true,
				title: "<div class='widget-header widget-header-small blue'><h4 class='smaller'><i class='ace-icon fa fa-pencil'></i> Edit County</h4></div>",
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
							$('#form-county-edit').submit();
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
			$('#remove_county_id').val(data.id);
			$('#remove_county_name').html(data.county_name);

			var dialog = $( "#dialog-remove-county" ).removeClass('hide').dialog({
				modal: true,
				title: "<div class='widget-header widget-header-small red'><h4 class='smaller'><i class='ace-icon fa fa-trash'></i> Remove County</h4></div>",
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
							$('#form-county-remove').submit();
						} 
					}
				]
			});
		});
	
	})
</script>
@stop