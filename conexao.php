<?php
    $host= "localhost";
	$use = "root";
    $pass = "";
    $dbname = "qualitec";
    $port = 3306;
try {
$conn = new PDO("mysql:host=$host; port=$port; dbname=" .$dbname, $use , $pass);
    
}
catch(Exception $ex) {
        echo "<script>alert('Erro ao conectar com o banco')</script>";
}
?>