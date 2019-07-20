<template>
	<div>
		
		<div class="row col-lg-12">
			<div class="card">
				<div class="card-header">
	                <h4 class="card-title">{{ this.movieTitle }}</h4>
	            </div>
	            <div class="card-body">	            	
	            	
	            	<table class="table table-striped table-dark" id="movieData">	
						<thead class="text-primary" style="" > 
							<th width='200'></th>
							<th width='50'>Id</th>
							<th width='50'>Character</th>							
							<th width="300">Name</th>								
						</thead>
						<tbody
							v-for="item in movieCast"
							v-bind:key="item">
							<tr>
								<td> <img :src="getPic(item.profile_path)"></td>
								<td> <a :href="generateHref(item.id)">{{ item.id }}</a></td>
								<td> {{ item.character}} </td>
								<td> {{ item.name }} </td>								
							</tr>
						</tbody>
					</table>
					
	            </div>
			</div>
		</div>

	</div>
	
</template>

<script>
	export default {
		name: "MovieCastComponent",
		props: ['movie-id','movie-title'],
		data() {
			return {
				movieId: "",
				movieTitle: "",
				movieCast: [],
				href: "person/",
				img_src: "https://image.tmdb.org/t/p/w185/",
				noImgFound: "https://www.fm.arizona.edu/phonebook/images/No_ImageFound.png",
				api_key: "07095eeae7a32cd735b4ed3af97afb77"
			}
		},
		mounted() {
            console.log('Component mounted.');
            console.log(this.movie-id);
            console.log(this.movie-title);
            this.movieId = this.movie-id;
            this.movieTitle = this.movie-title;

        },
        created () {
		    // fetch the data when the view is created and the data is
		    // already being observed
		    this.getMovieCast();
  },
		methods: {
			getMovieCast(){
				var settings = {
					"async": true,
					"crossDomain": true,
					"url": "https://api.themoviedb.org/3/movie/" + this.movieId + "/credits?api_key=" + this.api_key,					
					"method": "GET",
					"headers": {},
					"data": "{}"
				}
				var self = this;
				$.ajax(settings).done(function (response) {
					console.log(response);
					self.movieCast = response.cast;					
				});
			},
			getPic(img) {				
				if(img == null) {
					return this.noImgFound;
				}
				return this.img_src + img;

			},
			getGender(id) {
				if (id == 0)
					return "Unspecified";
				elseif( id == 1)
					return "Female";
				elseif( id == 2)
					return "Male";
			},

			generateHref(id) {
				/*return "person/" + id;*/
				return "{{ route('person.show',)}}"
			}
		}
	}
</script>