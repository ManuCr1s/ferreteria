<?php 

	include "conexion.php";
	$query=mysqli_query($conexion,"DELETE FROM producto WHERE id_producto='".$_POST["p"]."'");
	if($query)
	{
		echo "Se elimino correctamente";
	}
	else
	{
		echo "No se puedo eliminar";
	}