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
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">ADMINISTRADOR</div>
			</a>
			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading"> Secciones </div>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
                <a href="index.php" class="nav-link collapsed">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Carrusel de imágenes</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="index.php" class="nav-link collapsed">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Salir de agregar imagen</span>
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
						<h1 class="h3 mb-0 text-gray-800">Agregar imagen a Galería de Imágenes</h1>
					</div>

				</nav>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Subir nueva imagen</h1>
							<form enctype="multipart/form-data" method="post" action="upload.php">

								<div class="form-group">
									<label for="exampleInputPassword1">Texto a mostrar (nombre de la imagen)</label>
									<input type="text" name="title" class="form-control" placeholder="Texto a mostrar">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Imagen</label>
									<br>
									<input class="añadir-imagen" type="file" name="image" required>
								</div>

								<input type="submit" value="Subir imagen" class="btn btn-primary">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>