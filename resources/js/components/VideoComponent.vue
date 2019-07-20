<template>
	<div>
		<div class="row">
			<div class="text-center" id="app" v-cloak>
  				<h2 class="col-md-6 offset-md-3">{{ this.movieTitle }}</h2>
  				<div class="col-md-6 offset-md-3" v-for="video in videosResults" v-bind:key="video">
    				<iframe id="ytplayer" type="text/html" width="640" height="360"
    				:src="'https://www.youtube.com/embed/'+video.key+'?autoplay=0'"
  					frameborder="0"></iframe>
  				</div>
			</div>

		</div>
	</div>
</template>

<script>
	export default {
		name: "VideoComponent",
		props: ['movieId','movieTitle'],
		data() {
			return {
				videosResults: [],
				api_key: "07095eeae7a32cd735b4ed3af97afb77",
				videoId: "",				
				videoTitle: ""
			}
		},
		mounted() {
            console.log('Component mounted.');
            console.log(this.movieId);
            console.log(this.movieTitle);
            this.videoId = this.movieId;
            this.videoTitle = this.movieTitle;
        },
        created() {
        	this.getVideos();
        },
		methods: {
			getVideos(){
				var responseData;
				var settings = {
  					"async": true,
					"crossDomain": true,
					"url": "https://api.themoviedb.org/3/movie/" + this.movieId + "/videos?api_key=" + this.api_key + "&language=en-US",					
					"method": "GET",
					"headers": {},
					"data": "{}"
				}
				var self = this;				
				$.ajax(settings).done(function (response) {
					console.log(response);
					self.videosResults = response.results;
				});

			},
		}
	}
</script>