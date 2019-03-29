<?php	
	$count = 0;
?>


<div class="col-lg-4 col-lg-offset"> 
	
	<div class="card h-100 overflow-auto">
		<div class="card-header bg-primary">
			<h4 class="card-title text-center text-white">Genre</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive ">
				<table class="table table-bordered table-striped table-primary">
					<thead class="thead-dark">
						<tr>
							<th>#</th>      
                            <th>Id</th>
                            <th>Name</th>
                            <th></th>
						</tr>
					</thead>
					<tbody class="table-striped overflow-auto">						
						@foreach($genres as $genre)
						<?php $count++; ?>
						<tr>
							<td width='40' class=''>{{ $count }}</td>
							<td width='40' class=''>{{ $genre->id }}</td>
							<td width='150' class=''>{{ $genre->name }}</td>
							<td width='10' class='text-center'><a href="{{ url('genre/'.$genre->id.'/delete')}}" ><i class="fas fa-trash-alt"></i></td>
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


