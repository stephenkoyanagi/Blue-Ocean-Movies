<template>
	<select class="btn btn-warning" v-model="code" @change="selectCountry(code)">
		<option v-for="(item, index) in countryResults" :value="item.code">{{ item.name }}</option>
	</select>
</template>

<script>
	export default {
		name: "CountryDropDownComponent",
		data() {
			return {
				countryResults: [],
				code: "",
				name: "",
			}
		},
		mounted() {
            this.getCountry();
        },
		methods: {
			getCountry(){
        		window.axios.get('/country/all')
        			.then(({ data }) => {
        				this.countryResults = data;
        		});
			},
			selectCountry(countryCode) {
				this.$emit("selectedCountry", countryCode);
			}
		}
	}

</script>