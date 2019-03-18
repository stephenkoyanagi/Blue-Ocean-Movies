<nav class="navbar navbar-expand-lg navbar-transparent bg-primary  navbar-absolute">
	<div class="container-fluid">
		<div class="navbar-wrapper">
			<div class="navbar-toggle">
				<button type="button" class="navbar-toggler">
				<span class="navbar-toggler-bar bar1"></span>
				<span class="navbar-toggler-bar bar2"></span>
				<span class="navbar-toggler-bar bar3"></span>
				</button>
			</div>
	    	<a class="navbar-brand" href="#pablo">Dashboard</a>
	  	</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-bar navbar-kebab"></span>
			<span class="navbar-toggler-bar navbar-kebab"></span>
			<span class="navbar-toggler-bar navbar-kebab"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navigation">
	    	<ul class="nav navbar-nav navbar-right">
	    		@guest
					<li class="list-unstyled nav-item">
						<a class="nav-link" href="{{ url('/login') }}">LOGIN</a>
					</li>
					<li class="list-unstyled nav-item">
						<a class="nav-link" href="{{ url('/register') }}">REGISTER</a>
					</li>
				@else
					<li class="list-unstyled nav-item">
						<a class="nav-link" href="{{ url('/logout') }}">LOGOUT</a>
					</li>
				@endguest
			</ul>
	  	</div>
	</div>
</nav>