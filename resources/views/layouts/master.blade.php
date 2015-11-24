<!DOCTYPE html>
<html lang="en" ng-app="beatportApp">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>MixInky</title>

	<!-- css -->
	<link href="{{ URL::to('css/static/materialize.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="{{ URL::to('css/styles.css') }}" rel="stylesheet">
	<link href="{{ URL::to('css/static/toastr.min.css') }}" rel="stylesheet">

	{{--  js (must be loaded here) --}}
	<script src="{{ URL::to('js/static/bower_components/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ URL::to('js/static/toastr.min.js') }}"></script>


	<!-- ie -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body class="avoid-fout" ng-controller="MainController">

	<!-- Menu -->
	<header>
	<ul id="dropdown1" class="dropdown-content">
	  <li>
	  	<a href="#!"><i class="material-icons left">list</i>Playlist</a>
	  </li>
	  <li>
	  	<a href="#!"><i class="material-icons left">settings</i>Settings</a>
	  </li>
	  <li>
	  	<a href="#!"><i class="material-icons left">exit_to_app</i>Log out</a>
	  </li>
	</ul>

	<div class="navbar-fixed">
		<nav>
		    <div class="nav-wrapper">
		      <a href="#!" class="brand-logo">
			      <img src="{{ URL::to('images/logo/logo.png') }}"></a>
		      </a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li>
		        	<a><i class="material-icons left">home</i>Home</a>
		        </li>
		        <li>
		        	<a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons left">account_box</i>Profile<i class="material-icons right">arrow_drop_down</i></a>
		        </li>
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
			  	<li>
		        	<a><i class="material-icons left">home</i>Home</a>
		        </li>
		        <ul class="collapsible" data-collapsible="expandable">
			        <li>
			           <div class="collapsible-header"><i class="material-icons left">account_box</i>Profile<i class="material-icons right">arrow_drop_down</i></div>
					   <div class="collapsible-body">
						   <p>
							<a href="#!"><i class="material-icons left">list</i>Playlist</a>
							<a href="#!"><i class="material-icons left">settings</i>Settings</a>
							<a href="#!"><i class="material-icons left">exit_to_app</i>Log out</a>
						   </p>
					   </div>
			        </li>
		        </ul>
		      </ul>
		    </div>
		</nav>
	</div>
</header>

@yield('content')

{{-- Session notifications --}}
@if(Session::has('error'))
	<script type="text/javascript">
		toastr.error('{{ Session::get('error') }}');
	</script>
@elseif(Session::has('success'))
	<script type="text/javascript">
		toastr.success('{{ Session::get('success') }}');
	</script>
@endif

	<!-- Libs -->
	<script src="{{ URL::to('js/static/materialize.min.js') }}"></script>
	<script src="{{ URL::to('js/static/bower_components/angularjs/angular.min.js') }}"></script>
	<script src="{{ URL::to('js/src/controllers/MainCtrl.js') }}"></script>
	<script src="{{ URL::to('js/src/services/beatportService.js') }}"></script>
	{{--  src --}}
	<script src="{{ URL::to('js/src/main.js') }}"></script>
</body>
</html>
