<?php
require_once 'conexion.php';
$query=mysqli_query($conexion,"SELECT * FROM venta");
while($fila=mysqli_fetch_array($query)){
    echo '<tr>
    <td>'.$fila["id_venta"].'</td><td class="nombres">'.$fila["usuario"].'</td><td>'.$fila["fecha"].'</td>
    <td>'.$fila["costo"].'</td><td>'.$fila["precio"].'</td><td>'.$fila["utilidad"].'</td>
    <td>
    <a href="" class="remove" data-producto="'.$fila["id_venta"].'"><ion-icon name="journal"></ion-icon></a>
    </td><td></td>
</tr>';
}