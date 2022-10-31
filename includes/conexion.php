<?php
function conectar()
{
	global $con;
	$con = mysqli_connect("localhost","root","rootroot","lucio");
		/* comprobar la conexión */
		if (mysqli_connect_errno()) 
		{
		    printf("Falló la conexión: %s\n", mysqli_connect_error());
		    exit();
		}
			else
			{
				$con -> set_charset("utf8");
				$ret=true;
			}
		
	return $ret;
}
function desconectar()
{
	global $con;
	mysqli_close($con);
}

/*
function conectar()
{
	global $con;
	$ret = false;
		$con = mysql_connect("localhost","root","root");
		if ($con != false)
		{
				mysql_select_db("testss",$con);
				$ret = true;
		}
		else
			return "nooooooo";
		
	return $ret;
}
function desconectar()
{
	global $con;
	mysql_close($con);
}
*/
?>