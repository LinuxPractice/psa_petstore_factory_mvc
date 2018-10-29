<!DOCTYPE html>
<meta charset="UTF-8">
<head>
<meta charset="UTF-8">
<title>PSA Pet Store</title>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	crossorigin="anonymous"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	crossorigin="anonymous"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	crossorigin="anonymous"></script>

<style type="text/css">
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
	<div class="ontainer-fluid ml-5 mr-5">
		<header>
			<div class="row mt-2">
				<div class="col-md-7 ">
					<img src="/app/view/themes/default/images/logo.png"
						title="PSAPetstore" alt="PSAPetstore" class="img-fluid">
				</div>
				<div class="col-md-5 mt-5 mb-2">
					<form role="form" method="get" action="/">
						<div class="input-group">

							<input type="text" class="form-control" id="search"
								name="searchterm" placeholder="Find Pets"> <span
								class="input-group-btn">
								<button class="btn btn-primary" type="submit">Go!</button>
							</span>

						</div>
					</form>
				</div>
			</div>

			<section>
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">



					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li><a class="nav-link" href="/">All Products</a></li>
						</ul>
						<ul class="navbar-nav">
							<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
								href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false"> Types </a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<ul class="p-0">
										<li class="dropdown-item"><a href="/index.php">All Type</a></li>
										<li class="dropdown-item"><a href="/index.php?type=cat">Cats</a></li>
										<li class="dropdown-item"><a href="/index.php?type=dog">Dogs</a></li>
										<li class="dropdown-item"><a href="/index.php?type=reptile">Reptiles</a></li>
										<li class="dropdown-item"><a href="/index.php?type=toy">Toys</a></li>
										<li class="dropdown-item"><a href="/index.php?type=carrier">Carriers</a></li>

									</ul>
								</div></li>
						</ul>

						<ul class="navbar-nav">
							<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
								href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false"> Sorting </a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<ul class="p-0">
										<li class="dropdown-item"><a href="/index.php">No Sort</a></li>
										<li class="dropdown-item"><a href="/index.php?sort=ageasc">Sort
												Age ASC</a></li>
										<li class="dropdown-item"><a href="/index.php?sort=agedesc">Sort
												Age DESC</a></li>
										<li class="dropdown-item"><a
											href="/index.php?sort=lifespanasc">Sort Lifespan ASC</a></li>
										<li class="dropdown-item"><a
											href="/index.php?sort=lifespandesc">Sort Lifespan DESC</a></li>
										<li class="dropdown-item"><a href="/index.php?sort=priceasc">Sort
												Price ASC</a></li>
										<li class="dropdown-item"><a href="/index.php?sort=pricedesc">Sort
												Price DESC</a></li>
									</ul>
								</div></li>
						</ul>

						<ul class="navbar-nav">
							<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
								href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Popular</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<ul class="p-0">										
										<li class="dropdown-item"><a
											href="/index.php?type=cat&attribute=persian&attributename=breed">Persian
												Cats</a></li>
										<li class="dropdown-item"><a
											href="/index.php?type=dog&attribute=brown&attributename=color">Brown
												Dogs</a></li>
										<li class="dropdown-item"><a
											href="/index.php?type=reptile&attribute=tortoise&attributename=species">Tortoise</a></li>
										<li class="dropdown-item"><a
											href="/index.php?type=toy&attribute=plastic&attributename=material">Plastic
												Toys</a></li>
										<li class="dropdown-item"><a
											href="/index.php?type=carrier&attribute=36&attributename=width">Large
												Carriers</a></li>
									</ul>
								</div>
							</li>
						</ul>



						<ul class="navbar-nav">
							<li><a class="nav-link" href="/xml<?=$_SERVER['REQUEST_URI']?>">View
									XML</a></li>
							<li><a class="nav-link" href="/api<?=$_SERVER['REQUEST_URI']?>">View
									JSON</a></li>
						</ul>
					</div>

				</nav>
			</section>
		</header>