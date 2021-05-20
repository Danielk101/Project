<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="google-signin-client_id" content="538618062348-3h3lshc6pooakoms52t82tg4seg81q67.apps.googleusercontent.com">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Scripts -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="./js/login.js"></script>
	<title>Webshop</title>
  </head>

<body>
    
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="./index">
				<img src="./images/webshop.png" width="80" height="50">
			</a>
		  
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav11"
			  aria-controls="basicExampleNav11" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>

			<ol class="breadcrumb">
			  <li class="breadcrumb-item"><a class="waves-effect" href="./index">Home</a></li>
			</ol>
			
			<div class="collapse navbar-collapse" id="basicExampleNav11">
		  
			  <ul class="navbar-nav ml-auto">
				<li class="nav-item pl-2 mb-2 mb-md-0">
				  <a href="./shoppingcart" class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">
					Winkelmand
				  </a>
				</li>
				<li class="nav-item pl-2 mb-2 mb-md-0">
				  <a href="./contact" class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">
					Contact
				  </a>
				</li>
				<?php 
				session_start();
				if(isset($_SESSION['loggedin'])) : ?>
				<li class="nav-item pl-2 mb-2 mb-md-0">
				  <a href="./logout" class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">
					Uitloggen
				  </a>
				</li>
                    <?php else : ?>
						<li class="nav-item pl-2 mb-2 mb-md-0">
				  			<a href="./login" class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">
						Inloggen
				  </a>
				</li>
                        </h5>
                    <?php endif ?> 
				<li class="nav-item pl-2 mb-2 mb-md-0">
				  <a href="./registervisitor" class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">
					Registreer</a>
				</li>
			  </ul>
			</div>
		  </nav>
	</header>