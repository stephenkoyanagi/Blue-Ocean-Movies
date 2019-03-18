
<div class="col-lg-4">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Country</h4>
		
		</div>
		<div class="card-body">
			<form action="{{ route('country.store') }}" method="post">
				{{csrf_field()}}
				<div class="form-group">
    				<label for="countryCode">Code:</label>
    				<input type="text" class="form-control" name="countryCode" id="countryCode">
  				</div>
  				<div class="form-group">
    				<label for="countryName">Country Name:</label>
    				<input type="text" class="form-control" name="countryName" id="countryName">
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
