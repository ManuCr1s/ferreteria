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
	<link rel="stylesheet" type="text/css" href="http://localhost/ferreteria/app/css/bootstrap.min3.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ferreteria/app/css/style.css">
</head>
<body >

<header>
	<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
	<a class="navbar-brand text-white">USUARIO</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                             <span class="navbar-toggler-icon"></span>
                            </button>
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


<div class="container p-4">	
	<div id="product-content">
		 <div class="form-group">
			<label for="producto-search">BUSCAR PRODUCTOS</label> 
			<input type="text" name="producto-search" id="producto-search" class="form-control">
		</div>
		
		<table class="table table-bordered table-striped table-hover " >
			<caption></caption>
			<thead class="table-active">
				<tr>
						<th>CODIGO</th><th>MARCA</th><th>TAMAÑO</th><th>PRECIO</th><th>CANTIDAD</th>
				</tr>
				</tr>
				</tr>
			</thead>
			<tbody id="productos">
				
			</tbody>
		</table>
		<a class="btn btn-warning" data-toggle="modal" data-target="#carrito">VISUALIZE SUS COMPRAS</a>
		<span ><td><a href="reportes/reporte2.php" class="btn btn-info">GENERAR REPORTE</a></td></span>
	</div>


<div class="modal fade" id="carrito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carrito de compras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       		<table>
				<caption></caption>
				<thead class="">
					<tr>
							<th>CODIGO</th><th>MARCA</th><th>PRECIO</th><th>CANTIDAD</th><th>TOTAL</th>
					</tr>
					</tr>
					</tr>
				</thead>
				<tbody id="carrito_list">
					
				</tbody>
			</table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success" id="shop">Comprar Producto</button>
        
      </div>
    </div>
  </div>
</div>
	











	<div>

		
		<div id="carrito">
			
		</div>
		
	</div>
	

<footer>
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="http://localhost/ferreteria/app/js/bootstrap.js"></script>	
	<script src="http://localhost/ferreteria/app/js/carrito.js"></script>
	<script src="http://localhost/ferreteria/app/js/charge_client.js"></script>
	<script src="http://localhost/ferreteria/app/js/search_producto2.js"></script>
	<script src="http://localhost/ferreteria/app/js/shop.js"></script>
</footer>
</div>
</body>
</html>