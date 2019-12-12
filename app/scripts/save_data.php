<?php  

	include "conexion.php";
	$query=mysqli_query($conexion,"INSERT INTO producto(marca,tamano,fardos,descripcion,fecha_de_ingreso,costo,precio)
									 VALUES('{$_POST['producto']}','{$_POST['tamano']}','{$_POST['fardos']}','{$_POST['descripcion']}','{$_POST['fecha']}','{$_POST['costo']}','{$_POST['precio']}')"
									 
						);
	if($query)
	{
		echo "se guardo el producto";
	}else
	{
		echo "no se pudo guardar el producto";
	}