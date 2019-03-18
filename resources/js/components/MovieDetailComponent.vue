<template>
	<div>
		<div class="row">
			<form @submit.prevent="getMovieDetails">
				<div class="form-group ml-2 mt-4 pt-2">
					<label for="movieId">Movie Id</label>
					<input type="text" name="movieId" v-model="movieId">
					<button type="button" class="btn btn-warning" @click="getMovieDetails()">Get Movie Details</button>
					<input type="hidden" name="movieTitle" id="movieTitle">
				</div>
			</form>
		</div>

		<div class="row col-lg-12">
			<div class="card">
				<div class="card-header">
	                <h4 class="card-title">{{ movieDetailResults.title }}</h4>
	            </div>
	            <div class="card-body">
	            	<div class="">
	            		<img :src="getPic(movieDetailResults.poster_path)">
	            	</div>
	            	<div class="">
		            	<table class="table" id="movieData">	
							<thead class=" text-primary"> 
								<th>Overview</th>
								<th>Genre</th>
								<th>Runtime</th>
								<th>Release Date</th>
								<th>Popularity</th>
								<th>Tag Line</th>
								<th>Revenue</th>
								<th>Budget</th>
							</thead>
							<tbody>
								<tr>
									<td> {{ movieDetailResults.overview }}</td>
									<table v-for="(item, index) in genres">
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
		data() {
			return {
				movieId: "",
				movieTitle: "",
				movieDetailResults: [],
				genres: [],
				img_src: "https://image.tmdb.org/t/p/w500/",
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