<div class="col-lg-4">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Genre</h4>
		</div>
		<div class="card-body">
			<form action="{{ route('genre.store') }}" method="post">
				{{csrf_field()}}
				<div class="form-group">
    				<label for="genreId">Id:</label>
    				<input type="text" class="form-control" name="genreId" id="genreId">
  				</div>
  				<div class="form-group">
    				<label for="genreName">Name:</label>
    				<input type="text" class="form-control" name="genreName" id="genreName">
  				</div>
  				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<div class="card-footer">
			
		</div>
	</div>
</div>
