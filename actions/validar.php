<?php
    include_once("conexion.php");
    $sql = "SELECT tipo_usuario FROM usuario WHERE nombre_usuario = '".$_POST['nombre']."' and pass_usuario ='".$_POST['pass']."'";
    echo  $sql;
    $result = mysqli_query($conexion,$sql);
    while($row = mysqli_fetch_assoc($result)){
        header("Location: ../sistema.php");
    }
?>