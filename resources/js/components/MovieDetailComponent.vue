<template>
	<div>
		
		<div class="row col-lg-12">
			<div class="card">
				<div class="card-header text-center bg-card-header">
	                <h4 class="card-title">{{ movieDetailResults.title }}</h4>
	            </div>
	            <div class="card-body text-center">
	            	<div class="">
	            		<img :src="getPic(movieDetailResults.poster_path)">
	            	</div>
	            	<div class="">
		            	<table class="table table-striped table-dark" id="movieData">	
							<thead class=" text-primary"> 
								<th width="300">Overview</th>
								<th width="100">Genre</th>
								<th width="50">Runtime</th>
								<th width="100">Release Date</th> 
								<th width="50">Popularity</th>
								<th width="100">Tag Line</th>
								<th width="50">Revenue</th>
								<th width="50">Budget</th>
								<th width="50"></th>
							</thead>
							<tbody>
								<tr>
									<td> {{ movieDetailResults.overview }}</td>
									<table
										v-for="item in genres"
										v-bind:key="item">
										<tr>
											<td> {{ item.name }}</td>
										</tr>
									</table>
									<td> {{ movieDetailResults.runtime }}</td>
									<td> {{ movieDetailResults.release_date }}</td>
									<td> {{ movieDetailResults.popularity }}</td>
									<td> {{ movieDetailResults.tagline }}</td>
									<td> {{ movieDetailResults.revenue }}</td>
									<td> {{ movieDetailResults.budget }}</td>
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
		name: "MovieDetailComponent",
		props: ['movie-id','movie-title'],
		data() {
			return {
				movieId: "",
				movieTitle: "",
				movieDetailResults: [],
				genres: [],
				img_src: "https://image.tmdb.org/t/p/w342/",
				movieDetail: {
					id: 0,
					title: "",
					overview: "",
					release_date: ""
				},
				api_key: "07095eeae7a32cd735b4ed3af97afb77"
			}
		},
		mounted() {
            console.log('Component mounted.');
        },
        created () {
		    // fetch the data when the view is created and the data is
		    // already being observed
		    this.getMovieDetails();
  },
		methods: {
			getMovieDetails(){
				var settings = {
					"async": true,
					"crossDomain": true,
					"url": "https://api.themoviedb.org/3/movie/" + this.movieId + "?language=en-US&api_key=" + this.api_key,
					"method": "GET",
					"headers": {},
					"data": "{}"
				}
				var self = this;
				$.ajax(settings).done(function (response) {
					self.movieDetailResults = response;
					self.genres = response.genres;
				});
			},
			getPic(img) {
				return this.img_src + img;
			}
		}
	}
</script>

<style>
	.bg-card-header {
		background-color: #28A2EF;
	}
	.bg-buttons {
		background-color: #FF6FBA;
	}
	.bg-table-header {
		background-color: #749988;
	}
	.bg-card-body {
		background-color: #FAF9F8;
	}

</style>
