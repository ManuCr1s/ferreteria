<?php 
	session_start();
	if(!isset($_SESSION["user"]))
	{
		header("Location: /ferreteria/");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>SISTEMA DE VENTA</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand">ADMINISTRADOR</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                             <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="collapse">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Ventas
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="administrador.php" id='diaria'>Resumen Diario</a>
                                    
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="almacen.php">Almacen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="vemd.php">Usuarios</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <ul class="navbar-nav ml-auto">
                            <div class="form-inline my-0 ml-lg-0">
																<a class="navbar-brand text-white"><?php echo $_SESSION['user'];?></a>     
                                </div> 
                                <div class="form-inline my-0 ml-lg-0">
                                    <a class="btn btn-danger my-2 my-sm-0" type="submit" href="close.php">
                                        CERRAR SESION
                                    </a>     
                                </div>    
                            </ul>
	</nav>
</header>
<body>
<div class="container p-4">
<div id="ventas">
    <p class="text-monospace">REGISTRO DE VENTAS</p>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-sm" >
                        <tr class="bg-warning">
                            <th class="font-weight-bold">N° VENTA</th><th>VENDEDOR</th><th>FECHA</th><th>COSTO</th><th>PRECIO</th><th>UTILIDAD</th><th></th>
                        </tr>
                        <tbody id='table'></tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
            </div>
            <div class="col-md-2">
                <a class="btn btn-success" href="reportes/reporte.php">
                    REPORTE TOTAL
                </a>
            </div>
        </div>
		</div>
		

<footer>
	<script src="js/jquery.js"></script>
	<script src="js/load_venta.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</footer>

</div>
</body>
</html>