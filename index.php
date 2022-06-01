<?php
    $db = mysqli_connect('db4free.net','thaynan', 'ITE020120014', 'escobarcria')
        or die ("Falha ao conectar");

    $sql = "SELECT * FROM nome";

    $recordset = mysqli_query($db, $sql);

    $resultado = mysqli_fetch_all( $recordset );

    var_dump( $recordset );
?>