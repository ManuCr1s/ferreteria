<?php 
include "conexion.php";
	$query=mysqli_query($conexion,"SELECT * FROM producto");
	while($fila=mysqli_fetch_array($query))
	{
		echo '<tr>
					<td>'.$fila["id_producto"].'</td>
					<td class="nombres">'.$fila["marca"].'</td>
					<td class="nombres">'.$fila["tamano"].'</td>
					<td>'.$fila["precio"].'</td>
					<td><input type="text" id="cnt'.$fila["id_producto"].'" placeholder="Ingrese Cantidad"></td>
					<td><a href="" class="product" data-producto="'.$fila["marca"].'" data-precio="'.$fila["precio"].'" data-id="'.$fila["id_producto"].'">Comprar</a></td>
				</tr>';
	}