<?php 
require_once("../database/koneksi.php");
if(isset($_POST['submited'])){
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $username = htmlspecialchars($_POST["username"]);
    $user_level = htmlspecialchars($_POST["user_level"]);

    $sqlTable = "INSERT INTO tb_pengguna (id,email,password,username,nama,user_level) VALUES ('','$email','$password','$username','$nama','$user_level')";
    $rowTable = mysqli_query($conn, $sqlTable);
    
    $row = array($email,$password,$nama,$username,$user_level);
    $response["tb_pengguna"] = array($email,$password,$nama,$username,$user_level);
    array_push($response["tb_pengguna"], $row);
    header("location:index.php");
    exit(0);
}
?>