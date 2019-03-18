<template>
	<select class="btn btn-warning" v-model="code" @change="selectLanguage(code)">
		<option v-for="(item, index) in languageResults" :value="item.code">{{ item.name }}</option>
	</select>
</template>

<script>
	export default {
		name: "LanguageDropDownComponent",
		data() {
			return {
				languageResults: [],
				code: "",
				name: "",
			}
		},
		mounted() {
            this.getLanguage();
        },
		methods: {
			getLanguage(){
        		window.axios.get('/language/all')
        			.then(({ data }) => {
        				this.languageResults = data;
        		});
			},
			selectLanguage(languageCode) {
				this.$emit("selectedLanguage", languageCode);
			}
		}
	}

</script>