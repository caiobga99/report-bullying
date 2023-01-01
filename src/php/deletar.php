<?php
require_once("conexao.php");
$id = $_GET["id"]; 
if (!isset($id)) {
    header("location:../painel.php?id=0");
}
$delete = $conexao->prepare("DELETE FROM denuncia WHERE id=?");
$delete->bindParam(1, $id);
$delete->execute();


 header("location:../painel.php");
?>
