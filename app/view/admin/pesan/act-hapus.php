<?php 
require_once("../../../database/koneksi.php"); 
if(isset($_POST['hapus'])){
    $hapus = htmlspecialchars($_POST['hapus']);
    $table = "tb_pesan";
    $sql = "DELETE FROM $table WHERE id = '$hapus'";
    $conn->query($sql);
    header("location:index.php?email=".$_SESSION['email_pengguna']);
    exit(0);
}
?>