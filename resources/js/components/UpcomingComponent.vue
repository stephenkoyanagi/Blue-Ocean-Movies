<template>
	<div>
		<div class="row">
			<form @submit.prevent="getUpcoming">
				<div class="form-group ml-2 mt-4 pt-2">
					<country-dropdown-component @selectedCountry="selectCountry"></country-dropdown-component>
					<language-dropdown-component @selectedLanguage="selectLanguage"></language-dropdown-component>
					<button type="button" class="btn btn-warning" @click="getUpcoming()">Get Upcoming</button>
				</div>
			</form>
		</div>

		<div class="row col-lg-12">

			<div class="card">
				<div class="card-header">
	                <h4 class="card-title">Upcoming</h4>
	            </div>
	            <div class="card-body">
	            	<div class="">
		            	<table class="table table-dark text-warning" id="movieData">	
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
							<tbody v-for="(item, index) in upcomingResults.results">
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
		name: "UpcomingComponent",
		data() {
			return {
				countryCode: "",
				languageCode: "",
				upcomingResults: [],
				totalPageCount: 0,
				totalResults: 0,
				img_src: "https://image.tmdb.org/t/p/w154/",
				noImgFound: "https://www.fm.arizona.edu/phonebook/images/No_ImageFound.png",
				upcoming: {
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
			getUpcoming(){
				var responseData;
				var settings = {
					"async": true,
					"crossDomain": true,
					"dataType": "json",
					"url": "https://api.themoviedb.org/3/movie/upcoming?api_key=" + this.api_key + "&language=" + this.languageCode + "-" + this.countryCode + "&region=" + this.countryCode,
					"method": "GET",
					"headers": {},
					"data": "{}"
				}
				var self = this; 
				$.ajax(settings).done(function (response) {
					self.upcomingResults = response;
					self.totalPageCount = response.total_pages;
					self.totalResults = response.total_results;
				});

			},
			getPic(img) {
				if(img == null) {
					return this.noImgFound;
				}
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