<?php

class model {

    function InsertUsu($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10, $var11) {
        require_once '../../config.php';
        $puente = new config();
        $puente->Conectar_BD();
        $conn = $puente->Conectar_BD();
         $query = OCIParse($conn, "BEGIN insertarusuarios(:dato1, :dato2,:dato3, :dato4,:dato5,TO_DATE(:dato6,'YYYY-MM-DD'),:dato7, :dato8, :dato9,:dato10,:dato11); END;");
        OCIBindByName($query, ":dato1", $var1);
	OCIBindByName($query, ":dato2", $var2);
        OCIBindByName($query, ":dato3", $var3);
	OCIBindByName($query, ":dato4", $var4);
        OCIBindByName($query, ":dato5", $var5);
	OCIBindByName($query, ":dato6", $var6);
        OCIBindByName($query, ":dato7", $var7);
	OCIBindByName($query, ":dato8", $var8);
        OCIBindByName($query, ":dato9", $var9);  
        OCIBindByName($query, ":dato10", $var10);
        OCIBindByName($query, ":dato11", $var11);


	OCIExecute($query, OCI_DEFAULT);
	OCICommit($conn);
	OCILogoff($conn);
        echo '<script>window.location.href="../views/registro.php";</script>';
        
    }
}
