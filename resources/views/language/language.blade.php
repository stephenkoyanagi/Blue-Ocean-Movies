<?php
	$languages = App\Language::all();
	$count = 0;
?>


<div class="col-lg-4 col-lg-offset">
	
	<div class="card h-75 overflow-auto">
		<div class="card-header bg-danger">
			<h4 class="card-title text-center">Language</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-danger cellspacing='0'">
					<thead class="thead-dark">
						<tr>
							<th>#</th>      
                            <th>Code</th>
                            <th>Name</th>
						</tr>
					</thead>
					<tbody>						
						@foreach($languages as $language)
						<?php $count++; ?>
						<tr>
							<td width='40' class='table_width'>{{ $count }}</td>
							<td width='40' class='table_width'>{{ $language->code }}</td>
							<td width='150' class='table_width'>{{ $language->name }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>			
			</div>
		</div>
		<div class="card-footer">
			
		</div>

	</div>

</div>

