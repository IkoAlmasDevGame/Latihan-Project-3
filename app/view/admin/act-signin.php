<?php 
require_once("../../database/koneksi.php");
session_start();
if(!empty($_GET['act']=="yes")){
    if(isset($_POST['submit'])){
        $userEmail = htmlspecialchars($_POST["userEmail"]);
        $password = htmlspecialchars($_POST["password"]);
        password_verify($password, PASSWORD_DEFAULT);
    
        if($userEmail == "" || $password == ""){
            header("location:index.php");
            exit(0);
        }
    
        $table = "tbl_account";
        $sqlTables = "SELECT * FROM $table WHERE email='$userEmail' and password='$password' || username='$userEmail' and password='$password'";
        $rowTable = mysqli_query($conn,$sqlTables);
        $cek = mysqli_num_rows($rowTable);
    
        if($cek > 0){
            $response = array($userEmail, $password);
            $response['tbl_account'] = array($userEmail, $password);
            if($db = $rowTable->fetch_assoc()){
                if($db["user_level"] == "admin"){
                    $_SESSION["id_pengguna"] = $db["id"];
                    $_SESSION["email_pengguna"] = $db["email"];
                    $_SESSION["nama_pengguna"] = $db["nama"];
                    $_SESSION["username"] = $db["username"];
                    $_SESSION["user_level"] = "admin";
                    header("location:dashboard/index.php");
                }
                $_SESSION["status"] = true;
                array_push($response["tbl_account"], $row);
                exit(0);
            }else{
                $_SESSION["status"] = false;
                header("location:index.php");
                exit(0);
            }
        }
    }
}
?>