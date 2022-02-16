<?php 
	include_once 'backend/bancodedados.php';
	$query = "SELECT * FROM NavbarMenus";
	$dados = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$linha = mysqli_fetch_assoc($dados);
	$total = mysqli_num_rows($dados);
?>

<html>

<head>
	<title> Agência 4UP </title>
	<meta charset="utf-8">

	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<header class="bg-image-home p-3 font-personal h-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent opacity-50 container px-2 px-lg-5 h-min">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="index.php">Agência 4UP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
			
			<?php
					if($total > 0)  {
						?>
					<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
						<div class="navbar-nav fw-600">

					<?php
						do {
							echo "<a class='me-4 nav-link' href='". $linha['link'] ."'>" . $linha['nome']. "</a>";
						}
						while($linha = mysqli_fetch_assoc($dados));
					?>
							</div>
					</div>
					<?php
					}
					encerrar($conn);
					?>
                
        </div>
    </nav>
