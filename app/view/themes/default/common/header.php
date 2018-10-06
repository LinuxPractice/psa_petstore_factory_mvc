<?php
?>


<!DOCTYPE html>
<meta charset="UTF-8">
<head>
<meta charset="UTF-8">
<title>PSA Pet Store</title>
<style type="text/css">
.container {
	width: 90%;
	margin: 0 auto;
}

nav ul {
	list-style-type: none;
	margin: 0 auto;
	padding: 0;
	overflow: hidden;
}

nav ul li {
	padding: 25px;
	float: left;
	display: inline-block;
}

.quarter {
	width: 25%;
}

.floatleft {
	float: left;
}

.clear {
	clear: both;
}

.inline {
	display: inline;
}

.productbox {
	border: 1px solid red;
	padding: 10px;
	margin: 10px;
	min-height: 300px;
}

.mar5tb {
	margin: 5px 0px;
}
</style>
</head>
<body>
	<div class="container">
	<header>
		<section>
			<nav>
				<ul>
					<li>Types</li>
					<li><a href="/index.php">No Type</a></li>
					<li><a href="/index.php?type=cat">Cats</a></li>
					<li><a href="/index.php?type=dog">Dogs</a></li>
					<li><a href="/index.php?type=reptile">Reptiles</a></li>
					<li><a href="/index.php?type=toy">Toys</a></li>
					<li><a href="/index.php?type=carrier">Carriers</a></li>
				</ul>
			</nav>
		</section>
		<section>
			<nav>
				<ul>
				<li>Sorting</li>
					<li><a href="/index.php">No Sort</a></li>
					<li><a href="/index.php?sort=ageasc">Sort Age ASC</a></li>
					<li><a href="/index.php?sort=agedesc">Sort Age DESC</a></li>
					<li><a href="/index.php?sort=lifespanasc">Sort Lifespan ASC</a></li>
					<li><a href="/index.php?sort=lifespandesc">Sort Lifespan DESC</a></li>
					<li><a href="/index.php?sort=priceasc">Sort Price ASC</a></li>
					<li><a href="/index.php?sort=pricedesc">Sort Price DESC</a></li>
				</ul>
			</nav>
		</section>
		</header>
		
		