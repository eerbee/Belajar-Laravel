<!DOCTYPE html>
<html>
<head>
	<title>Admin - Edit Kategori Buku</title>
	@include('includes.admin.meta_head')
</head>
<body>
	<div class="page-wrapper">
		<!-- MENU SIDEBAR-->
		<aside class="menu-sidebar d-none d-lg-block">
		    <div class="logo">
		        <a href="/dashboard">
		            <h3>TREEBO LIBRARY</h3>
		            <h4>Administrator Panel</h4>
		        </a>
		    </div>
		    <div class="menu-sidebar__content js-scrollbar1">
		        <nav class="navbar-sidebar">
		            <ul class="list-unstyled navbar__list">
		                <li class="has-sub">
			               	<a href="{{ route('kategori.index') }}">
			                    <i class="fas fa-arrow-left"></i>Kembali
			                </a> 
			            </li>
		            </ul>
		        </nav>
		    </div>
		</aside>
		<!-- END MENU SIDEBAR-->

		<!-- PAGE CONTAINER-->
        <div class="page-container">
        	<!-- HEADER DESKTOP-->
        	@include('includes.admin.header')	
        	<!-- END HEADER DESKTOP-->

        	<!-- MAIN CONTENT-->
        	@yield('content')
        	<!-- END MAIN CONTENT-->
        </div>
	</div>
	
	<!-- Jquery JS-->
    <script src="{{asset('assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{asset('assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/vendor/counter-up/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
    <!-- Main JS-->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>