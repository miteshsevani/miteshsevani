<!DOCTYPE html>
<html lang="en">
<head>
	<title>Roax Academy</title>

	<?php include("includes/head.inc");?>

</head>
<body id="home">

	<?php include("includes/header.inc");?>	


	<div class="content row">		
	
		<?php include("includes/carousel.inc");?>	
		
		<section class="main col col-sm-8">	
			<section class="intro">	
				<h2>Contemporary Art Conference</h2>
				<p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of lectures by world-renowned art scholars and artists, and seven days and nights of gallery exhibits featuring the best in contemporary art, including painting, sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.</p>
				<p class="hidden-xs">The Roux Academy's annual conference and exhibit is designed to foster a close-knit relationship amongst artists at various universities around the world. No matter what school you attend - if you're an art student at an accredited art school anywhere in the world, you can attend the conference. But sign up early, as this not-to-miss conference sells out quickly, and the waiting list is long. In addition, art students are encouraged to send in works from their school portfolios to be considered for hanging in the CAC exhibit halls, as well as to be selected as a Featured Artist.</p>
			</section>      
		
			<section class="about-artists">
				<h2>About the artists</h2>
				<p>The Roux Academy gets thousands of submissions every year for artists interesting in participating in the CAC exhibits, and selects approximately 200 distinct pieces of contemporary art for display in their collective exhibit.</p>							
				<p class="hidden-xs">In addition, 12 individuals are honored as Featured Artists - each being granted his or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees. It is truly an honor to be a CAC Featured Artist and many past students artists who were featured at CAC have gone on to brilliant careers in art.</p>				
				<?php include("includes/artists-photogrid.inc");?>
				<a href="artists.php"><button type="button" class="btn btn-danger">Learn More</button></a>
			</section>		
			
			<section id="about-venue" class="media">
				<h2 class="media-heading">About the venue</h2>		
				<a href="venue.php" class="pull-right">
					<img class="media-object" src="images/hotels/contempo.jpg" alt="Hotel Contempo" />					
				</a>
				<div class="media-body">		
					<p>All CAC speaking events and gallery exhibits take place inside Hotel Contempo, located at 309 1st Avenue, in Downtown Seattle. Just a walk to the beach, the Space Needle, and a diverse sampling of restaurants and shopping makes the venue a much sought-after location for gatherings and conferences, year after year.</p>
					<p class="hidden-xs">Hotel Contempo is the perfect spot for a gathering of modern artists. Not only are the conference rooms and halls decked with breathtaking contemporary art and sculptures, but the individual rooms are as unique as the renowned artists who were commissioned to decorate them. From the Ross Monroe Purple suite filled wall to wall with paintings in his signature palette of violet and lavender to the Tess Lessinger Sculpted Universe suite, with dozens of original sculptures, including the bronze-casted toilet, visitors are sure to be intrigued and comforted during their stay at Hotel Contempo. For those who opt to stay at another location, there is certainly no shortage of hotels in Downtown Seattle. Ranging from shabby chic to the ultimate in sophistication - there is a something to suit everyone's taste.</p>
				</div>
			</section>
		</section>		
		
		<section class="sidebar col col-sm-4">						
			<?php 				
			include("includes/sidebar/sidebar-register.inc");
			include("includes/sidebar/sidebar-lastyear.inc");
			include("includes/sidebar/sidebar-schedule.inc");
			?>			
		</section>
		
	</div>			


	<?php include("includes/footer.inc");?>

</body>
</html>