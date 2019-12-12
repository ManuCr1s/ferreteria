<?php 
	session_start();
	if(!isset($_SESSION["user"]))
	{
		header("Location: /ferreteria/");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SISTEMA DE VENTAS</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
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


    <div class="container p-4" id="usuariios">
        <p class="text-monospace">REGISTRO DE USUARIOS</p>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered table-sm" >
                        <tr class="bg-info">
                            <th class="font-weight-bold">ID_USUARIO</th><th>NOMBRE</th><th></th>
                        </tr>
                        <tbody id='usuariio'></tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">

            </div>
           
                <div class="col-md-2">
                    <a href="" class="btn btn-success">Crear Usuario</a>
                </div>
                <div class="col-md-2">
                    <a href="" class="btn btn-danger">Eliminar Usuario</a>
                </div>
            
        </div>
	</div>
	
    <footer>
            <script src="js/jquery.js"></script>
            <script src="js/users.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </footer>
</header>   
</body>
</html>