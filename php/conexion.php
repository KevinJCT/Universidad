

<?php 
	function conexion()
	{
	$servername="localhost";
    $username="root";
    $password="";
    $dbname="cuartosw";
    return $conn= mysqli_connect($servername,$username,$password,$dbname);
	}

 ?>