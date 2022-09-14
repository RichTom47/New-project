<?php 

session_start();
// $_SESSION['name'] = 'TomTom';
if($_SERVER['QUERY_STRING'] == 'noname'){
	unset($_SESSION['name']);
}
$name = $_SESSION['name'] ?? 'Guest';

// get cookie
$gender = $_COOKIE['gender'] ?? 'Unknown';
?>
<head>
	<title>TomTom Pizza</title>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
    	.brand{
    		background: #cbb09c !important;
    	}
    	.brand-text{
    		color: #cbb09c !important;
    	}
    	form{
    		max-width: 460px;
    		margin: 20px auto;
    		padding: 20px;
    	}
    	.pizzas{
    		width: 100px;
    		margin: 50px auto -20px;
    		display: block;
    		position: relative;
    		top: 20px;
    	}
    </style>
</head>
<body class="blue lighten-4">
	<nav class="white z-depth-0">
		<div class="container">
			<a href="index.php" class="brand-logo brand-text">TomTom Pizza</a>
			<ul id="nav-mobile" class="right hide-on-small-and-down"> 
				<li class="black-text">Hello <?php echo htmlspecialchars($name); ?></li>
				<li class="black-text">(<?php echo htmlspecialchars($gender); ?>)</li>
				<li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
			</ul>
		</div>
	</nav>