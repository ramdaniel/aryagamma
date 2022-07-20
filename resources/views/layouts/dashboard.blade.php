<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>AryaGamma Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" type="image/x-icon" href="{{ asset('../assets/assets/img/logobimbelarya.png')}}" />
	<link rel="stylesheet" href="{{ asset('../assets/dashboard/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="{{ asset('../assets/dashboard/css/ready.css') }}">
	<link rel="stylesheet" href="{{ asset('../assets/dashboard/css/demo.css') }}">
	<link rel="stylesheet" type="text/css" href="/css/trix.css">
	<script type="text/javascript" src="/js/trix.js"></script>
	<style>
		trix-toolbar [data-trix-button-group="file-tools"]{
			display: none;
		}
	</style>
</head>
<body>
	@include('partials.NavDash')
  @include('partials.sidebar')
       @yield('container')
		
<!-- 							<div class="col-md-3">
								<div class="card card-stats">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center icon-warning">
													<i class="la la-pie-chart text-warning"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Number</p>
													<h4 class="card-title">150GB</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-bar-chart text-success"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Revenue</p>
													<h4 class="card-title">$ 1,345</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-times-circle-o text-danger"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Errors</p>
													<h4 class="card-title">23</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-heart-o text-primary"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Followers</p>
													<h4 class="card-title">+45K</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->

</body>
<script src="{{ asset('../assets/dashboard/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('../assets/dashboard/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('../assets/dashboard/js/core/popper.min.js') }}"></script>
<script src="{{ asset('../assets/dashboard/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('../assets/dashboard/js/plugin/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('../assets/dashboard/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>

<script src="{{ asset('../assets/dashboard/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('../assets/dashboard/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('../assets/dashboard/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('../assets/dashboard/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('../assets/dashboard/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('../assets/dashboard/js/ready.min.js') }}"></script>
<script src="{{ asset('../assets/dashboard/js/demo.js') }}"></script>
<script src="https://kit.fontawesome.com/d29327dca3.js" crossorigin="anonymous"></script>
</html>