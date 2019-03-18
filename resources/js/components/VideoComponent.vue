<template>
	<div>
		<div class="row">
			<div class="form-group ml-2 mt-4 pt-2">					
				<button type="button" class="btn btn-warning" @click="getVideos()">Get Videos</button>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: "VideoComponent",
		data() {
			return {
				videosResults: [],
				videos: {
					id: 166428,
					name: "",
					site: "",
					type: "",
					size: ""
				},
				api_key: "07095eeae7a32cd735b4ed3af97afb77"
			}
		},
		mounted() {
            console.log('Component mounted.')
        },
		methods: {
			getVideos(){
				var responseData;
				var settings = {
  					"async": true,
					"crossDomain": true,
					"url": "https://api.themoviedb.org/3/movie/" + this.videos.id + "/videos?language=en-US&api_key=" + this.api_key,
					"method": "GET",
					"headers": {},
					"data": "{}"
				}

				$.ajax(settings).done(function (response) {
					console.log(response);
				});

			},
		}
	}
</script>