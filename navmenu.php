<?php

session_start();

//ini_set('display_errors','On');
//error_reporting(E_ALL);
if (isset($_SESSION['logged'])) {
	$disabled = 'active';
	$regVisible = 'hidden';
} else {
	$disabled = 'disabled';
	$regVisible = '';
}
?>
<head>	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Giovanni Reale">
	<meta name="keywords" content="Bride Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<title>Unique Fashion</title>
	<link rel="shortcut icon" href="favicon.ico?v=1">
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/modern-business.css" rel="stylesheet">
	<!-- Custom Fonts -->
	<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>    <![endif]-->
</head>
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top navbar-justify" role="navigation">
	<div class="pull-left">
		<a href="index.php"><img src="img/logo.png"/></a>
	</div>
	<div class="container pull-right">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="index.php">Home <b class="glyphicon glyphicon-home"></b></a>
				</li>
				<li>
					<a href="chisiamo.php">Chi Siamo</a>
				</li>
				<li class="dropdown">
					<a id="linkCollezioni" href="#" class="dropdown-toggle <?= $disabled ?>" data-toggle="dropdown">Collezioni<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="dropdown-header">
							Abiti da sposa
						</li>
						<li>
							<a href="#">Presenti in negozio</a>
						</li>
						<li>
							<a href="#">Da ordinare</a>
						</li>
						<li class="divider"></li>
						<li class="dropdown-header">
							Abiti da sposo
						</li>
						<li>
							<a href="#">Presenti in negozio</a>
						</li>
						<li>
							<a href="#">Da ordinare</a>
						</li>
						<li class="divider"></li>
						<li class="dropdown-header">
							Abiti da cerimonia
						</li>
						<li>
							<a href="#">Presenti in negozio</a>
						</li>
						<li>
							<a href="#">Da ordinare</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">Dopo il matrimonio...</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="accessori.html">Accessori</a>
				</li>
				<li>
					<a href="promo.html">Promozioni</a>
				</li>
				<li>
					<a href="outlet.html">Outlet</a>
				</li>
				<li>
					<a href="noleggio.html">Noleggio</a>
				</li>
				<li>
					<a href="sartoria.html">Sartoria</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
				<li>
					<a href="news.html">Newsletter</a>
				</li>
				<li>
					<a href="contact.php">Contatto</a>
				</li>
				<li>
					<a href="partners.html">Partners</a>
				</li>
				<li>
					<?php
					if ($disabled == 'disabled') {
						echo '<a class="btn btn-sm" data-toggle="modal" data-target="#regModal">Log-In</a>';
					} else {
						echo '<a class="btn btn-sm" onclick="logout()">Esci</a>';
					}
					?>
				</li>
				<li>
					<a class="btn btn-primary btn-sm" href="https://www.facebook.com/UniqueFashionItaly"> <i class="fa fa-facebook fa-lg fa-border"></i> </a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>
<script type="text/javascript">
	function logout() {
		$.ajax({
			type : "POST",
			url : "bin/logout.php",
			data : "",
			success : function(msg) {
				location.reload();
			}
		});
	}
</script>