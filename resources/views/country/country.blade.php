<?php	
	$count = 0;
?>


<div class="col-lg-4 col-lg-offset">
	
	<div class="card h-100 overflow-auto">
		<div class="card-header bg-success">
			<h4 class="card-title text-center text-white">Country</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-success">
					<thead class="thead-dark">
						<tr>
							<th>#</th>      
                            <th>Code</th>
                            <th>Name</th>
                            <th></th>
						</tr>
					</thead>
					<tbody>						
						@foreach($countries as $country)
						<?php $count++; ?>
						<tr>
							<td width='40' class='table_width'>{{ $count }}</td>
							<td width='40' class='table_width'>{{ $country->code }}</td>
							<td width='150' class='table_width'>{{ $country->name }}</td>
							<td width='10' class='text-center'><a href="{{ url('country/'.$country->code.'/delete')}}" ><i class="fas fa-trash-alt"></i></td>
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

