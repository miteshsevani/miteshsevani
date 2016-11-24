<!DOCTYPE html>
<html lang="en">
<head>
	<title>AIA Test</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />	
</head>
<body id="home">

<div class="container">
	<div class="row">
		<header>
			<a href="#"><img src="images/logo.png"></a>
		</header>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<nav id="nav" class="navbar navbar-inverse navbar-static" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">HOME</a></li>			
					<li><a href="#">ABOUT US</a></li>
					<li><a href="#">GRADUATE PROGRAMMES</a></li>
					<li><a href="#">INTERNSHIPS</a></li>
					<li><a href="#">SEARCH JOBS AND APPLY</a></li>					
				</ul>
			</div>
		</nav>				
	</div>
</div>



<section id="banner">
	<div class="container">
		<div class="row text-center">			
			<div class="col-lg-6 col-lg-offset-3 col-sm-offset-2 hidden-xs">
				<p class="banner-text">WE <span class="red">LOVE</span><br />THE POSITIVELY<br />PERPLEXING</p>
			</div>
			<a class="hidden-xs" href="#"><div id="social-icons"></div></a>
		</div>
	</div>		
</section>
<section id="banner-text-small" class="visible-xs">
	<div class="container">
		<div class="row text-center">
			<div class="col-xs-12">
				<p class="banner-text">WE <span class="red">LOVE</span><br />THE POSITIVELY<br />PERPLEXING</p>
			</div>
		</div>	
	</div>
</section>

<section id="search">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-12">
				<form class="navbar-form" role="search" method="get" id="search-form" name="search-form">
			        <div class="input-group">
			            <input type="search" class="form-control" placeholder="Search jobs and appply" id="search" name="search" value="">
				        <div class="input-group-btn">
			            	<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
			            </div>
			        </div>
		        </form>
	        </div>
		</div>
	</div>
</section>

<section id="intro">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-10 col-lg-offset-1">
			<h4>GRADUATE CAREERS &amp; INTERNSHIPS</h4>
				<p>Welcome to Company. We’re a leading engineering and technology company where solving mind-bending problems is our job, our passion – our world. If you’re a graduate keen to embark on a stimulating engineering, business or finance career, or an undergraduate looking for an insightful internship or placement, it could be your world too. Read about our graduate and internship programmes in the UK. Find out how you can develop. Discover what we’re doing in Security, Defence, Aerospace and Transport. Delve into this site – and <a href="#">watch the video.</a></p>
			</div>
		</div>
	</div>
</section>	


<section id="promos">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-3 col-lg-offset-2">
				<img src="images/blue-circle.png" />
				<p>Roles</p>
			</div>
			<div class="col-lg-3">
				<img src="images/pink-circle.png" />		
				<p>Open Events</p>
			</div>
			<div class="col-lg-3">
				<img src="images/green-circle.png" />		
				<p>Recruitment Process</p>
			</div>			
		</div>
	</div>		
</section>

<footer class="visible-lg">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-lg-offset-1">
				<p>&copy; Copyright AIA Dev Test  <?php echo date('Y'); ?></p>					
			</div>
			<div class="col-lg-2">
				<img src="images/footer-logos.png" />
			</div>
		</div>
	</div>
</footer>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>