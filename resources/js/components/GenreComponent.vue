<template>
	<div>
		<div class="row col-lg-12">
			<div class="card">
				<div class="card-header">
	                <h4 class="card-title text-justify">Genres</h4>
	            </div>
	            <div class="card-body">
	            	<div class="">
		            	<table class="table table-dark text-warning" id="genreData">	
							<thead class=" text-primary"> 
								<th>#</th>
								<th>ID</th>
								<th>Name</th>
							</thead>
							<tbody
								v-for="item in genreResults"
								v-bind:key="item">
								<tr>
									<td> {{ index }} </td>
									<td> {{ item.id }} </td>
									<td> {{ item.name }} </td>									
									<td>
										
										<form method="post" action="/genre">
											<input type="hidden" name="_token" :value="csrf">
											<input type="hidden" name="genreId" :value="`${item.id}`">
											<input type="hidden"  name="genreName" :value="`${item.name}`">											
											<button type="submit" class="btn btn-primary">Add</button>

										</form>
										
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: "GenreComponent",
		props: ['post-route'],
		data() {
			return {
				genreResults: [],				
				genre: {
					id: 0,
					name: ""
				},
				api_key: "07095eeae7a32cd735b4ed3af97afb77",
				csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
			}
		},
		mounted() {
            console.log('Component mounted.');
            this.getGenre();
        },
		methods: {
			getGenre(){
				var settings = {
					"async": true,
					"crossDomain": true,
					"dataType": "json",
					"url": "https://api.themoviedb.org/3/genre/movie/list?api_key=" + this.api_key + "&language=en-US",
					"method": "GET",
					"headers": {},
					"data": { id: 0, name: ""}
				}
				var self = this;
				$.ajax(settings).done(function (response) {
					self.genreResults = response.genres;					
				});
			},
		}
	}
</script>