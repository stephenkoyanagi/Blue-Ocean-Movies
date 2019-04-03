<template>
	<div>
		<div class="row form-group grid col-lg-auto">
			<form @submit.prevent="getUpcoming" id="upcoming">
				<div class="form-group card-title" >
					<country-dropdown-component @selectedCountry="selectCountry"></country-dropdown-component>
					<language-dropdown-component @selectedLanguage="selectLanguage"></language-dropdown-component>
					<label for="page">Page:</label>
					<input type="text" name="page" v-model="page">
					<label v-if="totalResults > 0">of {{ this.totalPageCount }}</label>
					<button type="button" class="btn bg-buttons" @click="getUpcoming()">Get Upcoming</button>


		
				</div>
			</form>
		</div>

		<div class="row col-lg-12">

			<div class="card"> 
				<div class="card-header" style="background-color: #28A2EF;">
	                <h4 class="card-title text-center" style="color: #E6E6DE;">Upcoming</h4>
	            </div>
	            <div class="card-body justify-content-center bg-card-body">
	            	<div class="btn-group mb-4 mt-2 text-center">
	            		<button type="button" class="btn bg-buttons" @click="previousPage()">Prev. Page</button>
	            		<button type="button" class="btn bg-buttons" @click="nextPage()">Next Page</button>
	            	</div>
	            	<div class="table-responsive">
		            	<table class="table table-striped table-dark" style="background-color: #28A2EF;" id=" movieData">	
							<thead class="">								
								<th width='200'></th>
								<th width='50'>Id</th>								
								<th width="150">Title</th>
								<th width="300">Overview</th>
								<th width="100">Release Date</th>
								<!-- <th>Genre</th> -->
								<th width="50">Popularity</th>
								<th width="50">Voting Average</th>
								<th width="50">Vote Count</th>
							</thead>
							<tbody v-for="(item, index) in upcomingResults.results">
								<tr>																		
									<td> <img :src="getPic(item.poster_path)"></td>
									<td> <a :href="generateHref(item.id, item.title)">{{ item.id }}</a></td>
									<td> {{ item.title }} </td>
									<td> {{ item.overview }} </td>
									<td> {{ item.release_date }} </td>
									<td> {{ item.popularity }} </td>
									<td> {{ item.vote_average }} </td>									
									<td> {{ item.vote_count }} </td>
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
				page: 1,
				headerBackGroundColor: "bg-card-header",
				href: "movie/",
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

			nextPage() {
				var page = this.page + 1;
				if(page <= this.totalPageCount)
				{
					this.page = page;

					var responseData;
						var settings = {
							"async": true,
							"crossDomain": true,
							"dataType": "json",
							"url": "https://api.themoviedb.org/3/movie/upcoming?api_key=" + this.api_key + "&language=" + this.languageCode + "-" + this.countryCode + "&region=" + this.countryCode + "&page=" + this.page,
							"method": "GET",
							"headers": {},
							"data": "{}"
						}
						var self = this; 
						$.ajax(settings).done(function (response) {
							self.upcomingResults = response;
							self.totalPageCount = response.total_pages;
							self.totalResults = response.total_results;
							console.log(self.upcomingResults);
						});

				}
			},

			previousPage() {
				var page = this.page - 1;
				if(page <= this.totalPageCount && page > 0)
				{
					this.page = page;
					var responseData;
						var settings = {
							"async": true,
							"crossDomain": true,
							"dataType": "json",
							"url": "https://api.themoviedb.org/3/movie/upcoming?api_key=" + this.api_key + "&language=" + this.languageCode + "-" + this.countryCode + "&region=" + this.countryCode + "&page=" + this.page,
							"method": "GET",
							"headers": {},
							"data": "{}"
						}
						var self = this; 
						$.ajax(settings).done(function (response) {
							console.log(response);
							self.upcomingResults = response;
							self.totalPageCount = response.total_pages;
							self.totalResults = response.total_results;
						});
				}

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
			},
			generateHref(id, name) {
				return this.href + id + "/" + name;
			},
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
