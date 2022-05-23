<?php 
session_start(); 

$_SESSION['id'] = true;

$token = sha1(uniqid(mt_rand(), true));
setcookie('token', $token, time()+(60*60*12),'/');
$_SESSION['token'] = $token; 

?>
<html>

<head>
	<title>COOL SNEAKERS</title>

	<link rel="icon" href="../img/logo.png" type="image/png">

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="../css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/inicio_admin.css">

	<!-- <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"> -->
</head>

<body>
	<?php
	include "db.php";
	$images = get_imgs();
	?>
	
	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="../admin.php">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3 titulo-menu-admin">ADMINISTRADOR</div>
			</a>
			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading"> Secciones </div>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a href="#" class="nav-link collapsed">
					<i class="fas fa-fw fa-cog"></i>
					<span>Carrusel de imágenes</span>
				</a>
			</li>

			<li class="nav-item">
                <a href="../php/emails.php" class="nav-link collapsed">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Enviar emails</span>
                </a>
            </li>

			<li class="nav-item">
				<a href="../admin.php" class="nav-link collapsed">
					<i class="fas fa-fw fa-cog"></i>
					<span>Ir a menú de administrador</span>
				</a>
			</li>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>
					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Administración de Galería de Imagenes</h1>
					</div>

				</nav>
				<!-- End of Topbar -->

				<div class="container div-admin-carrusel">
					<h1>Imagenes del carrusel</h1>
					<br>
					<a href="./form.php" class="btn btn-default">Agregar Imagen</a>
					<br>
					<?php if (count($images) > 0) : ?>
						<br>
						<table class="table table-bordered">
							<thead>
								<th>Imagen</th>
								<th></th>
								<th></th>
							</thead>
							<?php foreach ($images as $img) : ?>
								<tr>
									<td><img src="<?php echo $img->folder . $img->src; ?>" style="width:240px;"> </td>
									<td><?php echo $img->title; ?></td>
									<td>
										<a class="btn btn-success" href="<?php echo $img->folder . $img->src; ?>">Ver imagen</a>
										<a class="btn btn-danger" href="./delete.php?id=<?php echo $img->id; ?>">Eliminar</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</table>
					<?php else : ?>

						<h4 class="alert alert-warning">No hay imagenes!</h4>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>
</body>

</html>