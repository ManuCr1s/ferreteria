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
<div class="container p-4">
<div id="product-content">
		<div class="form-group">
			<label for="producto-search">BUSCAR PRODUCTOS</label> 
			<input type="text" name="producto-search" id="producto-search" class="form-control">
		</div>
		
		<table class="table table-bordered table-sm" >
      <caption></caption>
			<thead class="bg-dark">
        <tr>
          <th>CODIGO</th><th>MARCA</th><th>TAMAÑO</th><th>FARDOS</th><th>DESCRIPCION</th><th>FECHA</th><th>COSTO</th><th>PRECIO</th>
				</tr>
      </tr>
    </tr>
  </thead>
  <tbody id="productos">
    
    </tbody>
  </table>
  <span ><td><a href="" data-toggle="modal" data-target="#exampleModal" class="btn btn-success">Agregar Producto</a></td></span>
		<span ><td><a href="scripts/reporte.php" class="btn btn-info">GENERAR REPORTE</a></td></span>
	</div>
	
	<!-- Modal crear -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="POST" accept-charset="utf-8" id="new-product">
        	<div class="form-group row">
			  <label for="example-text-input" class="col-3 col-form-label">PRODUCTO </label>
			  <div class="col-9">
			    <input class="form-control" type="text"  id="producto" placeholder="ingrese producto" name="producto">
			  </div>
			</div>
			<div class="form-group row">
			  <label for="example-text-input" class="col-3 col-form-label">Tamaño</label>
			  <div class="col-9">
			    <input class="form-control" type="text" placeholder="Ingrese el Tamaño" id="tamano" name="tamano">
			  </div>
			</div>
      <div class="form-group row">
			  <label for="example-number-input" class="col-3 col-form-label">Fardos</label>
			  <div class="col-9">
			    <input class="form-control" type="number" placeholder="Ingrese los fardos" id="fardos" name="fardos">
			  </div>
			</div>
      <div class="form-group row">
			  <label for="example-text-input" class="col-3 col-form-label">Descripcion</label>
			  <div class="col-9">
			    <input class="form-control" type="text" placeholder="Ingrese la decripcion" id="descripcion" name="descripcion">
			  </div>
			</div>
      <div class="form-group row">
			  <label for="example-text-input" class="col-3 col-form-label">Fecha</label>
			  <div class="col-9">
			    <input class="form-control" type="text" placeholder="Ingrese fecha" id="fecha" name="fecha">
			  </div>
			</div>
      <div class="form-group row">
			  <label for="example-text-input" class="col-3 col-form-label">Costo</label>
			  <div class="col-9">
			    <input class="form-control" type="text" placeholder="Ingrese Costo" id="costo" name="costo">
			  </div>
			</div>
      <div class="form-group row">
			  <label for="example-text-input" class="col-3 col-form-label">Precio</label>
			  <div class="col-9">
			    <input class="form-control" type="text" placeholder="Ingrese Precio" id="precio" name="precio">
			  </div>
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success" id="save">Guardar Producto</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal editar -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="POST" accept-charset="utf-8" id="edit-product">
        	<div class="form-group row">
			  <label for="example-text-input" class="col-3 col-form-label">PRODUCTO </label>
			  <div class="col-9">
			    <input class="form-control" type="text"  id="producto-edit" placeholder="ingrese producto" name="producto-edit">
			  </div>
			</div>
      <div class="form-group row">
			  <label for="example-text-input" class="col-3 col-form-label">Tamaño</label>
			  <div class="col-9">
			    <input class="form-control" type="text" placeholder="Ingrese Tamaño" id="tamano-edit" name="tamano-edit">
			  </div>
			</div>
      <div class="form-group row">
			  <label for="example-number-input" class="col-3 col-form-label">Fardos</label>
			  <div class="col-9">
			    <input class="form-control" type="number" placeholder="Ingrese Fardos" id="fardos-edit" name="fardos-edit">
			  </div>
			</div>
      <div class="form-group row">
			  <label for="example-text-input" class="col-3 col-form-label">Descripcion</label>
			  <div class="col-9">
			    <input class="form-control" type="text" placeholder="Ingrese Descripcion" id="descripcion-edit" name="descripcion-edit">
			  </div>
			</div>  
      <div class="form-group row">
			  <label for="example-text-input" class="col-3 col-form-label">Fecha</label>
			  <div class="col-9">
			    <input class="form-control" type="text" placeholder="Ingrese Fecha" id="fecha-edit" name="fecha-edit">
			  </div>
			</div>  
      <div class="form-group row">
			  <label for="example-text-input" class="col-3 col-form-label">Costo</label>
			  <div class="col-9">
			    <input class="form-control" type="text" placeholder="Ingrese Costo" id="costo-edit" name="costo-edit">
			  </div>
			</div>  
      <div class="form-group row">
			  <label for="example-text-input" class="col-3 col-form-label">Precio</label>
			  <div class="col-9">
			    <input class="form-control" type="text" placeholder="Ingrese Precio" id="precio-edit" name="precio-edit">
			  </div>
			</div>  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success" >Guardar Producto</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
	
<footer>
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/load.js"></script>
	<script type="text/javascript" src="js/save.js"></script>
	<script type="text/javascript" src="js/edit-delete.js"></script>
	<script type="text/javascript" src="js/search_producto.js"></script>
</footer>