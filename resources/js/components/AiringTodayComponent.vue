<template>
	<div>
		<div class="row">
			<form @submit.prevent="airingToday">
				<div class="form-group ml-2 mt-4 pt-2">
					<language-dropdown-component @selectedLanguage="selectLanguage"></language-dropdown-component>
					<label for="page">Page:</label>
					<input type="text" name="page" v-model="page">
					<button type="button" class="btn btn-warning" @click="airingToday()">Search</button>
				</div>
			</form>
		</div>

		<div class="row col-lg-12">
			<div class="card">
				<div class="card-header">
	                <h4 class="card-title">Airing Today</h4>
	            </div>
	            <div class="card-body">
	            	<div class="">
		            	<table class="table table-dark text-warning" id="genreData">	
							<thead class=" text-primary"> 
								<th>#</th>
								<th>ID</th>
								<th>Name</th>
							</thead>
							<tbody v-for="(item, index) in genreResults">
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
		name: "AiringTodayComponent",
		data() {
			return {
				airingTodayResults: [],
				airingToday: {
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
					"url": "https://api.themoviedb.org/3/tv/airing_today?page=1&language=en-US&api_key=07095eeae7a32cd735b4ed3af97afb77",
					"method": "GET",
					"headers": {},
					"data": "{}"
				}

				$.ajax(settings).done(function (response) {
				  console.log(response);
				});
			},
		}
	}
</script>

