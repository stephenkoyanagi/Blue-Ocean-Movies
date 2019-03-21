<template>
	<div>
		<div class="row form-group grid col-lg-auto">
			<form @submit.prevent="searchMovie" class="">
				<div class="form-group" style="background-color: #C1815A">

					<label>Search:</label>
					<input type="text" name="searchQuery" v-model="searchQuery">
					<label>Language:</label>
					<language-dropdown-component  @selectedLanguage="selectLanguage"></language-dropdown-component>

					<label for="page">Page:</label>
					<input type="text" name="page" v-model="page">
					<label v-if="totalResults > 0">of {{ this.totalPageCount }}</label>
					<label for="year">Year:</label>
					<input type="text" class="datepicker" id="datepicker" name="year" v-model="year">
					<button type="button" class="btn btn-info" @click="searchMovie()">Search</button>
				</div>
			</form>
		</div>

		<div class="row col-lg-12">

			<div class="card bg-card-header">
				<div class="card-header" style="background-color: #A0514D;">
	                <h4 class="card-title text-center" style="color: #E6E6DE;">Search Movie</h4>
	            </div>
	            <div class="card-body justify-content-center" style="background-color: #ABA68A">
	            	
	            	<div class="btn-group mb-4 mt-2 text-center">
	            		<button style="background-color: #C1815A" type="button" class="btn bg-buttons" @click="previousPage()">Prev. Page</button>
	            		<button style="background-color: #C1815A" type="button" class="btn bg-buttons" @click="nextPage()">Next Page</button>
	            	</div>
	            	<div class="">
		            	<table class="table table-striped table-dark" style="background-color: #A0514D;" id="movieData">	
							<thead style="" > 
								<th width='200'></th>
								<th width='50'>Id</th>
								<th width="150">Title</th>
								<th width="300">Overview</th>
								<th width="50">Popularity</th>
								<th width="100">Release Date</th>
							</thead>
							<tbody v-for="(item, index) in movieSearchResults.results">
								<tr>
									<td> <img :src="getPic(item.poster_path)"></td>
									<td> <a :href="generateHref(item.id, item.title)">{{ item.id }}</a></td>
									<td> {{ item.title }}</td>
									<td> {{ item.overview }}</td>
									<td> {{ item.popularity }}</td>
									<td> {{ item.release_date }}</td>
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
		name: "SearchMovieComponent",
		data() {
			return {
				searchQuery: "",
				currentSearchQuery: "",
				language: "",
				page: 1,
				href: "movie/",
				adult: false,
				totalPageCount: 0,
				totalResults: 0,
				year: "",
				movieSearchResults: [],
				pages: [],
				headerBackGroundColor: "bg-card-header",
				noImgFound: "https://www.fm.arizona.edu/phonebook/images/No_ImageFound.png",
				img_src: "https://image.tmdb.org/t/p/w154/",
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
			searchMovie() {
				var url = "https://api.themoviedb.org/3/search/movie?api_key=" + this.api_key + "&language=" + this.language + "&query=" + this.searchQuery + "&page=" + this.page + "&include_adult=" + this.adult
				console.log(parseInt(this.year));
				if(parseInt(this.year) > 0) {
					url = url + "&year=" + this.year;
				}
				console.log(url);
				var settings = {
					"async": true,
					"crossDomain": true,
					"url": url,
					"method": "GET",
					"headers": {},
					"data": "{}"
				}
				var self = this;
				console.log(url);
				$.ajax(settings).done(function (response) {
					console.log(response);
					self.movieSearchResults = response;
					self.totalPageCount = response.total_pages;
					self.totalResults = response.total_results;
				});
			},
			nextPage() {
				
				var page = this.page + 1;
				if(page <= this.totalPageCount)
				{
					this.page = page;
				
					var url = "https://api.themoviedb.org/3/search/movie?api_key=" + this.api_key + "&language=" + this.language + "&query=" + this.searchQuery + "&page=" + this.page + "&include_adult=" + this.adult
					if(this.year.length > 0) {
						url = url + "&year=" + this.year;
					}
					var settings = {
						"async": true,
						"crossDomain": true,
						"url": url,
						"method": "GET",
						"headers": {},
						"data": "{}"
					}
					var self = this;
					console.log(url);
					$.ajax(settings).done(function (response) {
						console.log(response);
						self.movieSearchResults = response;
						self.totalPageCount = response.total_pages;
						self.totalResults = response.total_results;
					});
				}
			},
			previousPage() {
				
				var page = this.page - 1;

				if(page <= this.totalPageCount && page > 0)
				{
					this.page = page;
					console.log(this.page);
					var url = "https://api.themoviedb.org/3/search/movie?api_key=" + this.api_key + "&language=" + this.language + "&query=" + this.searchQuery + "&page=" + this.page + "&include_adult=" + this.adult
					if(this.year.length > 0) {
						url = url + "&year=" + this.year;
					}
					var settings = {
						"async": true,
						"crossDomain": true,
						"url": url,
						"method": "GET",
						"headers": {},
						"data": "{}"
					}
					var self = this;
					console.log(url);
					$.ajax(settings).done(function (response) {
						console.log(response);
						self.movieSearchResults = response;
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
			selectLanguage(languageCode) {
				this.language = languageCode;
			},
			generateHref(id, name) {
				return this.href + id + "/" + name;
			},
		}
	}

</script>

<style>
	.bg-card-header {
		background-color: #216076;
	}
	.bg-buttons {
		background-color: #8FC1E4;
	}
	.bg-table-header {
		background-color: #749988;
	}

</style>