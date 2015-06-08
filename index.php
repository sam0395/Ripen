<!DOCTYPE html>



<html>
	<head>
		<title>Ripen</title>
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="dist/css/style.css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		
		<script type="text/javascript" src="dist/js/bootstrap.js"></script>
		<script src="dist/js/smooth-scroll.min.js"></script>
	</head>

	<body>
		<?php 
			include_once('nav.php');
		?>

			

			<div id="home" class="col-md-12 header-image" id="main">
				<div>
					<h1 class="h1">Text Example</h1>
				</div>
				<div id="caret"><a data-scroll href="#about"><i class="icon-angle-down"></i></a></div>
			</div>

			<script type="text/javascript">
			var transition = true;
			var i = 1;
			var images = [];

			images[0] = "url('../Ripen/images/header.jpg')"
			images[1] = "url('../Ripen/images/header2.jpg')"
			images[2] = "url('../Ripen/images/header3.jpg')"
			images[3] = "url('../Ripen/images/header4.jpg')"

			console.log(images.length);
			setTimeout(function firstFade() {$('#home').animate({'opacity': 0}, 13000);}, 3000);

			setInterval(function changeBackground(){
						if(i>images.length - 2){
							i = 0;
						}
						else
							i++;

						console.log(i);

					 	$('#home').css({opacity : 0});
					 	$('#home').animate({'opacity': 1}, 3000);
					 	$('#home').css("background-image", images[i]);
						$('#home').animate({'opacity': 0}, 13000);
			}, 13000);
		
			
			</script>

			<?php 
			include_once('remaining.php');
			?>

	</body>
</html>