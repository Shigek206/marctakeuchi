
<!DOCTYPE html> 

<html>

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" >
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta NAME="description" CONTENT="Welcome to the personal site of Seattle Web Developer and Online Marketing Consultant Marc Takeuchi"> 
		<title>Marc Takeuchi, Seattle WA | Seattle Web Design</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<link href="styles/style.css" rel="stylesheet" type="text/css" media="all" />

		<?php include 'scripts/gtag.php';?>
	</head>

	<body>

	<!-- Fixed navbar -->
	<?php include 'includes/main-menu.php';?>

	<section class="masthead-cnt">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">

					<div class="masthead-txt">
						<h4 class="hidden">//Simple.Minimal</h4>
						<h5>fusing tradition with technology</h5>

						<img src="graphics/white-arrow-48.png" class="arrow">
					</div>

				</div>
			</div>
		</div>
	</section>

	
	<?php include 'includes/intro.php';?>

	<?php include 'includes/badges.php';?>

	<section class="work-cnt">
		<img src="graphics/arrow-c63f17.png" class="arrow">
		<?php include 'includes/efelle-1.php';?>
		<img src="graphics/gears3-bg.png" class="gears">
	</section>

	<section class="work-sub-cnt">
	<img src="graphics/arrow-e8e8dc.png" class="arrow">
		<img src="graphics/gears4-bg.png" class="gears2">
		<?php include 'includes/efelle-3.php';?>

		<?php include 'includes/efelle-2.php';?>

		<?php include 'includes/boeing-1.php';?>

		<?php include 'includes/boeing-2.php';?>

		<?php include 'includes/boeing-3.php';?>
		<img src="graphics/gears5-bg.png" class="gears3">
	</section>
	
	<?php include 'includes/skills.php';?>
	
	<?php include 'includes/education.php';?>

	<?php include 'includes/blogs.php';?>

	<?php include 'includes/footer.php';?>

	</body>
</html>