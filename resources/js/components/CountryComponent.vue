<template>
	<div>
		<div class="row col-lg-12">
			<div class="card">
				<div class="card-header">
	                <h4 class="card-title">Country</h4>
	            </div>
	            <div class="card-body">
	            	<div class="">
		            	<table class="table table-dark text-warning" id="countryData">	
							<thead class=" text-primary">
								<th>Code</th>
								<th>Name</th>
							</thead>
							<tbody v-for="(item, index) in countryResults">
								<tr>
									<td> {{ item.iso_3166_1 }} </td>
									<td> {{ item.english_name }} </td>
									<td>
										
										<form method="POST" action="/country">
											<input type="hidden" name="_token" :value="csrf">
											<input type="hidden" name="countryCode" :value="`${item.iso_3166_1}`">
											<input type="hidden" name="countryName" :value="`${item.english_name}`">
											<button type="submit" class="btn btn-primary">Add</button>
										</form>
										
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
		name: "CountryComponent",
		data() {
			return {
				countryResults: [],
				country: {
					id: "",
					name: ""
				},
				api_key: "07095eeae7a32cd735b4ed3af97afb77",
				csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
			}
		},
		mounted() {
            this.getCountry();
        },
		methods: {
			getCountry(){	
				var settings = {
					"async": true,
					"crossDomain": true,
					"dataType": "json",
					"url": "https://api.themoviedb.org/3/configuration/countries?api_key=" + this.api_key,
					"method": "GET",
					"headers": {},
					"data": "{}"
				}
				var self = this;
				$.ajax(settings).done(function (response) {
					self.countryResults = response;
				});
			},
		}
	}
</script>