<?php 
require_once("../database/koneksi.php");
session_start();
if(isset($_POST['submit'])){
    $userEmail = htmlspecialchars($_POST["userEmail"]);
    $password = htmlspecialchars($_POST["password"]);
    password_verify($password, PASSWORD_DEFAULT);

    if($userEmail == "" || $password == ""){
        header("location:index.php");
        exit(0);
    }

    $sqlTable = "SELECT * FROM tb_pengguna WHERE email='$userEmail' and password='$password' || username='$userEmail' and password='$password'";
    $rowTable = $conn->query($sqlTable);
    $cek = mysqli_num_rows($rowTable);

    if($cek > 0){
        $response = array($userEmail, $password);
        $response['tb_pengguna'] = array();
        if($row = $rowTable->fetch_assoc()){
            if($row['user_level'] == "pengguna"){
                $_SESSION["id_pengguna"] = $row["id"];
                $_SESSION["email_pengguna"] = $row["email"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["nama_pengguna"] = $row["nama"];
                $_SESSION["user_level"] = "pengguna";
                header("location:dashboard/index.php");
            }
            $_SESSION["status"] = true;
            array_push($response["tb_pengguna"], $row);
        }else{
            $_SESSION["status"] = false;
            header("location:index.php");
        }
    }
}
?>