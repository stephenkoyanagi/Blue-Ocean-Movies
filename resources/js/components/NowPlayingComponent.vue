<template>
	<div>
		<div class="row">
			<form @submit.prevent="getNowPlaying">
				<div class="form-group ml-2 mt-4 pt-2">
					<country-dropdown-component @selectedCountry="selectCountry"></country-dropdown-component>
					<language-dropdown-component @selectedLanguage="selectLanguage"></language-dropdown-component>
					<button type="button" class="btn btn-info" @click="getNowPlaying()">Get Now Playing</button>
				</div>
			</form>
		</div>

		<div class="row col-lg-12">
			<div class="card">
				<div class="card-header">
	                <h4 class="card-title">Now Playing</h4>	                
	            </div>
	            <div class="card-body">
	            	<div class="row">
	            		Test:
	            	</div>
	            	<div class="">
		            	<table class="table table-striped table-dark text-warning" id="movieData">	
							<thead class=" text-primary">
								<th>#</th>	
								<th>Id</th>
								<th></th>
								<th>Title</th>
								<th>Overview</th>
								<th>Release Date</th>
								<!-- <th>Genre</th> -->
								<th>Popularity</th>
								<th>Voting Average</th>
								<th>Vote Count</th>
							</thead>
							<tbody
								v-for="item in nowPlayingResults.results"
								v-bind:key="item">
								<tr>
									<td> {{ index }}</td>
									<td> {{ item.id }} </td>
									<td> <img :src="getPic(item.poster_path)"></td>
									<td> {{ item.title }} </td>
									<td> {{ item.overview }} </td>
									<td> {{ item.release_date }} </td>
									<td> {{ item.vote_average }} </td>
									<!-- <td v-for="item"> </td> -->
									<td> {{ item.popularity }} </td>
									<td> {{ item.vote_count }} </td>
									<!-- <td>
										
										<form method="POST" action="route('genre.store')">
											<input type="text" name="languageCode" :value="`${item.iso_639_1}`">
											<input type="text" name="languageName" :value="`${item.english_name}`">
											<button type="submit" class="btn btn-primary">Add</button>
										</form>
										
									</td> -->
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
		name: "NowPlayingComponent",
		data() {
			return {
				countryCode: "",
				languageCode: "",
				img_src: "https://image.tmdb.org/t/p/w154/",
				nowPlayingResults: [],
				totalPageCount: 0,
				totalResults: 0,
				nowPlaying: {
					id: 0,
					title: "",
					overview: "",
					release_date: ""
				},
				api_key: "07095eeae7a32cd735b4ed3af97afb77"
			}
		},
		mounted() {
            console.log('Component mounted.')
        },
		methods: {
			getNowPlaying(){
				var responseData;
				var settings = {
					"async": true,
					"crossDomain": true,
					"url": "https://api.themoviedb.org/3/movie/now_playing?api_key=" + this.api_key + "&language=" + this.languageCode + "-" + this.countryCode + "&page=1&region=" + this.countryCode,
					"method": "GET",
					"headers": {},
					"data": "{}"
				}
				var self = this;
				$.ajax(settings).done (function (response) {
					self.nowPlayingResults = response;
					self.totalPageCount = response.total_pages;
					self.totalResults = response.total_results;
				});
			},
			getPic(img) {
				return this.img_src + img;
			},
			selectCountry(code) {
				this.countryCode = code;
			},
			selectLanguage(code) {
				this.languageCode = code;
			}
			
		}
	}
</script>