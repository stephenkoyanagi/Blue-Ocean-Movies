<template>
	<div>
		<div class="row form-group grid">
			<form @submit.prevent="searchMovie" class="">
				<div class="form-group ml-2 mt-4 pt-2">
					<fieldset class="form-group">
						<label for="searchQuery">Search:</label>
						<input type="text" name="searchQuery" v-model="searchQuery">
						<label>Language:</label>
						<language-dropdown-component  @selectedLanguage="selectLanguage"></language-dropdown-component>
					</fieldset>
					<fieldset class="form-group">
						<label for="page">Page:</label>
						<input type="text" name="page" v-model="page">
						<label v-if="totalResults > 0">of {{ this.totalPageCount }}</label>
						<label for="year">Year:</label>
						<input type="text" class="datepicker" id="datepicker" name="year" v-model="year">
						<button type="button" class="btn btn-warning" @click="searchMovie()">Search</button>
					</fieldset>
					
				</div>
			</form>
		</div>

		<div class="row col-lg-12">

			<div class="card">
				<div class="card-header bg-warning text-white">
	                <h4 class="card-title">Search Movie</h4>
	            </div>
	            <div class="card-body">
	            	<div class="">
	            		<img id="profile" src="">
	            	</div>
	            	<div class="btn-group mb-4 mt-2">
	            		<button type="button" class="btn btn-warning" @click="previousPage()">Prev. Page</button>
	            		<button type="button" class="btn btn-warning" @click="nextPage()">Next Page</button>
	            	</div>
	            	<div class="">
		            	<table class="table table-striped table-dark text-warning" id="movieData">	
							<thead class="bg-warning text-white" > 
								<th></th>
								<th>Id</th>
								<th>Title</th>
								<th>Overview</th>
								<th>Popularity</th>
								<th>Release Date</th>
							</thead>
							<tbody v-for="(item, index) in movieSearchResults.results">
								<tr>
									<td> <img :src="getPic(item.poster_path)"></td>
									<td> <a href="">{{ item.id }}</a></td>
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
		name: "SearchPeopleComponent",
		data() {
			return {
				searchQuery: "",
				currentSearchQuery: "",
				language: "",
				page: 1,
				adult: false,
				totalPageCount: 0,
				totalResults: 0,
				year: "",
				movieSearchResults: [],
				pages: [],
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
			}
		}
	}

	

</script>