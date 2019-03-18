
<div class="col-lg-4">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Language</h4>
			<!-- <div class="dropdown">
				<button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
					<i class="now-ui-icons loader_gear"></i>
				</button>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					<a class="dropdown-item text-danger" href="#">Remove Data</a>
				</div>
			</div> -->
		</div>
		<div class="card-body">
			<form action="{{ route('language.store') }}" method="post">
				{{csrf_field()}}
				<div class="form-group">
    				<label for="languageCode">Code:</label>
    				<input type="text" class="form-control" name="languageCode" id="languageCode">
  				</div>
  				<div class="form-group">
    				<label for="languageName">Language Name:</label>
    				<input type="text" class="form-control" name="languageName" id="languageName">
  				</div>
  				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<div class="card-footer">
			<!-- <div class="stats">
				<i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
			</div> -->
		</div>
	</div>
</div>
