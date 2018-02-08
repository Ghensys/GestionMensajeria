<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/favicon.ico">
	<title>Medialoot Bootstrap 4 Dashboard Template</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    
    <!--Theme Switcher-->
    
    <script type="text/javascript">
    	function setTheme(name) {
	var theme = document.getElementById('theme-css');
	var style = 'css/theme-' + name + '.css';
	if (theme) {
		theme.setAttribute('href', style);
	} else {
		var head = document.getElementsByTagName('head')[0];
		theme = document.createElement("link");
		theme.setAttribute('rel', 'stylesheet');
		theme.setAttribute('href', style);
		theme.setAttribute('id', 'theme-css');
		head.appendChild(theme);
	}
	
	window.localStorage.setItem('bs4d-theme', name);
	}
	
	var selectedTheme = window.localStorage.getItem('bs4d-theme');
	if (selectedTheme) {
		setTheme(selectedTheme);
	}
	
	window.setTimeout(function() {
	var el = document.getElementById('hide-theme');
	el.parentNode.removeChild(el);
	}, 5);
    </script><link rel="stylesheet" href="css/theme-teal.css" id="theme-css">
    <!-- End Theme Switcher -->
</head>
<body class="login-page">
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<main class="col-xs-10 col-sm-8 col-md-4 m-auto ">
				<div class="login-panel card mt-5">
					<div class="card-block">
						<h3 class="card-title text-center mt-1">Login</h3>
						<div class="divider mt-0"></div>
						<form role="form" method="post">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="E-mail" name="email" autofocus="" type="email" required>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" value="" type="password" required>
								</div>
								<div class="checkbox mt-1 mb-2">
									<label class="custom-control custom-checkbox">
										<input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span>
										  <span class="custom-control-description">Remember me</span></label>
								</div>
								<div class="text-center"><button type="submit" class="btn btn-lg btn-primary">Login</button></div></fieldset>
								</form></div>
							
						
					</div>
				</main></div>
			
		</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    
    <script src="js/custom.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
	

</body>
</html>