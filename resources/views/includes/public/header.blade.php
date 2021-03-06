<!-- Start Header -->
<header id="mu-hero">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light mu-navbar">
			<!-- image based logo -->
		   	<a class="navbar-brand mu-logo" href="{{ url('/') }}">
		   		<img src="{{asset('assets_public/images/logo.png')}}" width="65px" height="65px">
		   	</a>
			<!-- Text based logo -->
			<a class="navbar-brand mu-logo" href="{{ url('/') }}" style="margin-top: -15px;">
				<span>treebo library</span>
			</a>
			
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="fa fa-bars"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto mu-navbar-nav">
		      	<li class="nav-item">
		        	<a href="{{ url('/') }}">Home</a>
		      	</li>
		      	<li class="nav-item"><a href="{{ url('about_us') }}">About us</a></li>
		      	<li class="nav-item"><a href="{{ url('koleksi_buku') }}">Koleksi Buku</a></li>
		    	<li class="nav-item"><a href="{{ url('buku') }}">Admin</a></li>
		    </ul>
		  </div>
		</nav>
	</div>
</header>
<!-- End Header -->