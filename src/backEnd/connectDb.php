<?php 
    DEFINE("HOST","127.0.0.1");
    DEFINE("DBNAME","total_care");
    DEFINE("USER","root");
    DEFINE("PASS","");
    $connectDb = mysqli_connect(HOST,USER,PASS,DBNAME);
    if (!$connectDb)
    {
        die ("Não foi possivel se conectar ao banco de dados :".mysqli_connect_error());
    }
?>