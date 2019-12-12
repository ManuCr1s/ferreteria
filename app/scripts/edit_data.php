<?php 
	include "conexion.php";
	$query=mysqli_query($conexion,"UPDATE  producto SET marca='{$_POST['producto-edit']}', tamano='{$_POST['tamano-edit']}', fardos='{$_POST['fardos-edit']}', descripcion='{$_POST['descripcion-edit']}',fecha_de_ingreso='{$_POST['fecha-edit']}',costo='{$_POST['costo-edit']}',precio='{$_POST['precio-edit']}' WHERE id_producto= {$_GET['id']} ");
	if($query)
	{
		echo "se actualizo correctamente";
	}
	else
	{
		echo "no se puedo actualizar";
	}