<?php 

		require_once "conexion.php";

		$user=$_POST["user"];
		$password=$_POST["password"];
		$privilegio=$_POST["privilegios"];
		if(!empty($user)|| !empty($password))
		{
			$solicitud=mysqli_query($conexion,"SELECT * FROM user WHERE user='{$user}' and password='{$password}' and privilegio='{$privilegio}'")or die("usuario no encontrado");

			$fila=mysqli_fetch_array($solicitud);
			if($fila)
			{
				session_start();
				
				$_SESSION["user"]=$fila["user"];
				
				echo $fila["privilegio"];

				
			}else{echo "0";}
		}
		else
		{
			echo "0";
		}


		












 ?>