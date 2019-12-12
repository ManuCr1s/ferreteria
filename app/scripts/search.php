<?php 
	
	include "conexion.php";
	$query=mysqli_query($conexion,"SELECT * FROM producto WHERE marca LIKE '%{$_POST['producto']}%' ");

	while($fila=mysqli_fetch_array($query))
	{
		echo '<tr>
					<td>'.$fila["id_producto"].'</td>
					<td class="nombres">'.$fila["marca"].'</td>
					<td>'.$fila["tamano"].'</td>
					<td>'.$fila["fardos"].'</td>
					<td>'.$fila["descripcion"].'</td>
					<td>'.$fila["fecha_de_ingreso"].'</td>
					<td>'.$fila["costo"].'</td>
					<td>'.$fila["precio"].'</td>
					<td><a href="" class="remove" data-producto="'.$fila["id_producto"].'">ELIMINAR</a>
					<td><a href="" id="btn2" data-toggle="modal" data-target="#editModal" class="edit" data-id="'.$fila["id_producto"].'" data-producto="'.$fila["marca"].'" data-cantidad="'.$fila["tamano"].'">EDITAR</a></td>
				</tr>';
	}