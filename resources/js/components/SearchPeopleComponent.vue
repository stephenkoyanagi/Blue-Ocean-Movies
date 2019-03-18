<template>
	<div>
		<div class="row">
			<form @submit.prevent="searchPeople">
				<div class="form-group ml-2 mt-4 pt-2">
					<label for="searchQuery">Search:</label>
					<input type="text" name="searchQuery" v-model="searchQuery">
					<label for="language">Language:</label>
					<input type="text" name="language" v-model="language">
					<label for="page">Page:</label>
					<input type="text" name="page" v-model="page">
					<button type="button" class="btn btn-warning" @click="searchPeople()">Search</button>
				</div>
			</form>
		</div>

		<div class="row col-lg-12">
			<div class="card">
				<div class="card-header">
	                <h4 class="card-title">Search People</h4>
	            </div>
	            <div class="card-body">
	            	<div class="">
	            		<img id="profile" src="">
	            	</div>
	            	<div class="">
		            	<table class="table table-dark text-warning" id="peopleData">	
							<thead class="bg-primary text-white" > 
								<th>#</th>
								<th>Profile Picture</th>
								<th>Id</th>
								<th>Name</th>
							</thead >
							<tbody v-for="(item, index) in peopleSearchResults.results">
								<tr>
									<td> {{ index }} </td>
									<td> <img :src="getPic(item.profile_path)"></td>
									<td> {{ item.id }} </td>
									<td> {{ item.name }}</td>
								
									<td>
										<table class="text-warning">
											<thead class="bg-primary text-white">
												<th></th>
												<th>Id</th>
												<th>Title</th>
												<th>Overview</th>
												<th>Release Date</th>
											</thead>
											<tbody v-for="(item, index) in item.known_for">
												<tr>
													<td> <img :src="getPic(item.poster_path)"></td>
													<td> {{ item.id }}</td>
													<td> {{ item.title }}</td>
													<td> {{ item.overview }}</td>
													<td> {{ item.release_date }}</td>
														
												</tr>
											</tbody>
										</table>
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
		name: "SearchPeopleComponent",
		data() {
			return {
				searchQuery: "",
				language: "en-US",
				page: 1,
				adult: false,
				totalPageCount: 0,
				totalResults: 0,
				peopleSearchResults: [],
				noImgFound: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBpfFrvBzLWzoIjIR4OGegozXbcLK2aAZLxH-7ZPDheAM0-MfJ2A",
				img_src: "https://image.tmdb.org/t/p/w154/",
				peopleDetail: {
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
			searchPeople(){
				var settings = {
					"async": true,
					"crossDomain": true,
					"url": "https://api.themoviedb.org/3/search/person?api_key=" + this.api_key + "&language=" + this.language + "&query=" + this.searchQuery + "&page=" + this.page + "&include_adult=" + this.include_adult,
					"method": "GET",
					"headers": {},
					"data": "{}"
				}
				var self = this;

				$.ajax(settings).done(function (response) {
					
					console.log(response);
					
					self.peopleSearchResults = response;
					self.totalPageCount = response.total_pages;
					self.totalResults = response.total_results;
				});
			},
			getPic(img) {
				if(img == null) {
					return this.noImgFound;
				}
				return this.img_src + img;
			}
		}
	}
</script>