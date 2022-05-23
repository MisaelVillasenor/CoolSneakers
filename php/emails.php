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
				<a href="../admin/index.php" class="nav-link collapsed">
					<i class="fas fa-fw fa-cog"></i>
					<span>Carrusel de imágenes</span>
				</a>
			</li>

			<li class="nav-item">
				<a href="#" class="nav-link collapsed">
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
						<h1 class="h3 mb-0 text-gray-800">Enviar emails a clientes</h1>
					</div>

				</nav>
				<!-- End of Topbar -->


				<?php
				include('config.php');
				$QueryInmuebleDetalle = ("SELECT * FROM registro WHERE correo !='' limit 50 ");
				$resultadoInmuebleDetalle = mysqli_query($con, $QueryInmuebleDetalle);
				$cantidad = mysqli_num_rows($resultadoInmuebleDetalle);
				?>



				<div class="container div-admin-carrusel">
					<h1>Registro de clientes</h1>
					<br>

					<form action="enviarEmail.php" method="post">
						<div class="row mb-5">
							<div class="col-4">
								<input type="checkbox" onclick="marcarCheckbox(this);" />
								<label id="marcas">Seleccionar todos</label>
							</div>
							<div class="col-4">
								<p id="resp"></p>
							</div>
							<div class="col-4">
								<input type="submit" style="display: none;" name="enviarform" id="enviarform" class="btn btn-round btn-primary btn-block" value="Enviar Emails">
							</div>
						</div>

						<div class="table-responsive mb-5">
							<table class="table  table-hover table-bordered">
								<thead class="thead-dark">
									<tr>
										<th> # </th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Email</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									while ($dataClientes = mysqli_fetch_array($resultadoInmuebleDetalle)) { ?>
										<tr>
											<td>
												<?php echo $i; ?>
												<input type="checkbox" name="correo[]" class="CheckedAK" correo="<?php echo $dataClientes['correo']; ?>" value="<?php echo $dataClientes['correo']; ?>" />
											</td>
											<td><?php echo $dataClientes['nombre']; ?></td>
											<td><?php echo $dataClientes['apellido']; ?></td>
											<td><?php echo $dataClientes['correo']; ?></td>
										</tr>
									<?php $i++;
									} ?>
								</tbody>
							</table>

						</div>


				</div>
				</form>

			</div>




		</div>


		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="../js/correos.js"></script>

	</div>
	</div>
	</div>
</body>

</html>