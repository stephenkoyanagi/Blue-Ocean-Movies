<template>
	<select class="btn languageBgColor" v-model="code" @change="selectLanguage(code)">
		<option
			v-for="item in languageResults"
			v-bind:key="item"
			:value="item.code"			
			>
			{{ item.name }}
		</option>
	</select>
</template>

<script>
	export default {
		name: "LanguageDropDownComponent",
		data() {
			return {
				languageResults: [],
				code: "en",
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

<style type="text/css">
	.languageBgColor {
		background-color: #F1F1EF;
	}
</style>
