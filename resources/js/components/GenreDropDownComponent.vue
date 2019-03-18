<template>
	<select class="btn btn-warning" v-model="genreId" @change="selectGenre(genreId)">
		<option v-for="(item, index) in genreResults" :value="item.id">{{ item.name }}</option>
	</select>
</template>

<script>
	export default {
		name: "GenreDropDownComponent",
		data() {
			return {
				genreResults: [],
				genreId: "",
				name: ""
			}
		},
		mounted() {
            this.getGenre();
        },
		methods: {
			getGenre(){
        		window.axios.get('/genre/all')
        			.then(({ data }) => {
        				this.genreResults = data;
        		});
			},
			selectGenre(genreId) {
				this.$emit("selectedGenre", genreId);
			}
		}
	}

</script>