<!DOCTYPE html>
<html lang="it">

	
<body>

	<!-- nav header -->
    <?php include('navmenu.php');?> 

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide" style="height: 768px; margin: 0 auto">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="fill" src="img/banner.jpg"></img>
                <div class="carousel-caption">ok
				
                    <h2>Caption 1</h2>
                </div>
            </div>
			<div class="item">
                <img class="fill" src="img/noi.jpg"></img>
                <div class="carousel-caption">
                    <h2>Noi</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

	<hr/>
    <!-- Page Content -->
    <div class="container">
      <!-- Call to Action Section -->
        <div class="panel panel-default <?=$regVisible?>" >
            <div class="row">
                <div class="col-md-4">
                    <p class="text-center lead">Registrati con l'email per vedere tutte le collezioni</p>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-lg btn-default btn-block" data-toggle="modal" data-target="#regModal">Registrati Ora !</a>
                </div>
            </div>
        </div>
        <!-- Marketing Icons Section -->
        <div class="row panel panel-default" id="panelCollezioni">
			<div class="col-lg-12" >
				<h1 class="page-header" >
					<i id="plusSezioneAbiti" class="glyphicon glyphicon-plus fa fa-fw"></i> 
					<a onclick="change('plusSezioneAbiti');"style="text-decoration : none;" role="button" data-toggle="collapse" href="#sezioneAbiti" aria-expanded="false" aria-controls="sezioneAbiti"><strong> Collezioni </strong></a>
				</h1>
			</div>
			<div class="collapse" id="sezioneAbiti">
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4><b>Abiti da sposa</b></h4>
						</div>
						<div class="panel-body">
							<img class="img-responsive img-portfolio img-hover" src="img/mini.jpg" alt="">
							<a href="#" class="btn btn-default">Vedi</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4><b>Abiti da sposo</b></h4>
						</div>
						<div class="panel-body">
							<img class="img-responsive img-portfolio img-hover" src="img/sposo.jpg" alt="">
							<a href="#" class="btn btn-default">Vedi</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4><b>Abiti da cerimonia</b></h4>
						</div>
						<div class="panel-body">
							<img class="img-responsive img-portfolio img-hover" src="img/mini.jpg" alt="">
							<a href="#" class="btn btn-default">Vedi</a>
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row  panel panel-default">
            <div class="col-lg-12">
                <h2 class="page-header">Promozioni</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="img/sposo.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="img/mini.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="img/sposo.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="img/mini.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="img/sposo.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="img/mini.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row panel panel-default">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Business Features</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.2.0</strong>
                    </li>
                    <li>jQuery v1.11.0</li>
                    <li>Font Awesome v4.1.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/700x450" alt="">
            </div>
        </div>
        <!-- /.row -->

    <hr>
	<?php include('modal.php');?> 
	<?php include('footer.html');?> 

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script type="text/javascript">
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
	function change(id){
		if($('#'+id).attr("class") == 'glyphicon glyphicon-plus fa fa-fw'){
			$('#'+id).attr("class","glyphicon glyphicon-minus fa fa-fw");
		}else{
			$('#'+id).attr("class","glyphicon glyphicon-plus fa fa-fw");
		}
	}
    </script>
<script type="text/javascript" src="http://counter9.fcs.ovh/private/countertab.js?c=e021fb479bbb8d5d0bbce224bd6074e0"></script>
<br/>
        
</body>

</html>
