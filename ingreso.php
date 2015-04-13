<?php
	include ("conexion.php");
	
	$conn = OCILogon($user, $pass, $db);
	
	if (!$conn){
		echo "Conexion es invalida" . var_dump ( OCIError() );
		die();
	}
	
	$var1 = $_POST["cedula"];
	$var2 = $_POST["pn1"];
        $var3 = $_POST["pn2"];
	$var4 = $_POST["pa1"];
        $var5 = $_POST["pa2"];
	$var6 = $_POST["fecha"];
        $var7 = $_POST["hijos"];
	$var8 = $_POST["sexo"];
	
	$query = OCIParse($conn, "insert into CLIENTE values (:dato1, :dato2,:dato3, :dato4,:dato5, TO_DATE(:dato6,'YYYY-MM-DD'),:dato7, :dato8)");
        OCIBindByName($query, ":dato1", $var1);
	OCIBindByName($query, ":dato2", $var2);
        OCIBindByName($query, ":dato3", $var3);
	OCIBindByName($query, ":dato4", $var4);
        OCIBindByName($query, ":dato5", $var5);
	OCIBindByName($query, ":dato6", $var6);
        OCIBindByName($query, ":dato7", $var7);
	OCIBindByName($query, ":dato8", $var8);
	OCIExecute($query, OCI_DEFAULT);
	OCICommit($conn);
	OCILogoff($conn);
        echo '<script> alert("registro guardado");window.location.href="index.php";</script>';
?>