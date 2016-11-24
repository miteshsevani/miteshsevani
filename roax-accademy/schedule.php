<!DOCTYPE html>
<html lang="en">
<head>
	<title>Roax Academy</title>

	<?php include("includes/head.inc");?>

</head>
<body id="schedule">

<?php include("includes/header.inc");?>

	
	<div class="content row">
		<section class="main col col-sm-8">	
			<h2>Schedule</h3>					
			<p>The Roux Academy gets thousands of submissions every year for artists interesting in participating in the CAC exhibits, and selects approximately 200 distinct pieces of contemporary art for display in their collective exhibit. In addition, 12 individuals are honored as Featured Artists - each being granted his or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees. It is truly an honor to be a CAC Featured Artist and many past students artists who were featured at CAC have gone on to brilliant careers in art.</p>
			<ul class="nav nav-tabs">
				<li class="active"><a href="#monday" data-toggle="tab">Monday</a></li>
				<li><a href="#tuesday" data-toggle="tab">Tuesday</a></li>
				<li><a href="#wednesday" data-toggle="tab">Wednesday</a></li>
				<li><a href="#thursday" data-toggle="tab">Thursday</a></li>
				<li><a href="#friday" data-toggle="tab">Friday</a></li>				
			</ul>
			<div class="tab-content">
				<?php 
				
				include("includes/schedule/schedule-monday.inc");
				include("includes/schedule/schedule-tuesday.inc");
				include("includes/schedule/schedule-wednesday.inc");
				include("includes/schedule/schedule-thursday.inc");
				include("includes/schedule/schedule-friday.inc");
				
				?>
			</div>
		</section>
		<section class="sidebar col col-sm-4">
					
		<?php 
		
		include("includes/sidebar/sidebar-register.inc");
		include("includes/sidebar/sidebar-lastyear.inc");
		include("includes/sidebar/sidebar-artists.inc");
		
		?>
		
		</section>
	</div>

<?php include("includes/footer.inc");?>

</body>
</html>