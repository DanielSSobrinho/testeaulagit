<?php
function inserirUsuario($conn,$nomeusu,$emailusu,$foneusu,$cpfusu,$tipousu,$cepusu,$numusu,$compleusu){
    $query = "INSERT INTO `tbusuario` (`idusu`, `nomeusu`, `emailusu`, `foneusu`, `tipousu`, `cpfusu`, `cepusu`, `numusu`, `compleusu`)
    VALUES (NULL, '{$nomeusu}', '{$emailusu}', '{$foneusu}', '{$tipousu}', '{$cpfusu}', '{$cepusu}', '{$numusu}', '{$compleusu}');";
    $dados = mysqli_query($conn,$query);
    return $dados;
}

?>