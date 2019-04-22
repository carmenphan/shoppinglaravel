<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo trans("System::404/index.title")?></title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Swanky Error Page Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,900,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- css -->
<link href="{{ url("/page404") }}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css -->
<!-- js files -->
<script src="{{ url("/page404") }}/js/modernizr.custom.js"></script>
<!-- /js files -->
</head>
<body>
<h1 class="header-w3ls w3l w3"><?php echo trans("System::404/index.title")?></h1>
<div class="container-w3layouts agileinfo w3-agileits agileits-w3layouts w3-agile">
	<svg version="1.1" viewbox="0 0 800 400">
		<!-- add title for accessibility -->
		<title><?php echo trans("System::404/index.title")?></title> 
		<defs>  
			<clippath id="my-path">
				<text x="50" y="350">404</text>
			</clippath>
		</defs>
		<image xlink:href="{{ url("/page404") }}/images/content.jpg" clip-path="url(#my-path)" width="100%" height="100%" id="filler" preserveAspectRatio="none" />
	</svg>
</div>      
<p class="error-agileits wthree"><?php echo trans("System::404/index.bold-desc")?></p>
<p class="copyright agile"><?php echo trans("System::404/index.copy-write")?></p>
</body>
</html>
