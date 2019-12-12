<?php
require_once 'conexion.php';
$query=mysqli_query($conexion,"SELECT id_usuario,user FROM user WHERE privilegio BETWEEN 2 AND 3");
while($fila=mysqli_fetch_array($query)){
    echo '<tr>
    <td>'.$fila["id_usuario"].'</td><td class="nombres">'.$fila["user"].'</td>
    <td></td>
</tr>';
}