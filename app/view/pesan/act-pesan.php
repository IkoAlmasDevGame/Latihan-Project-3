<?php
require_once("../../database/koneksi.php"); 
if(isset($_POST['kirim'])){
    $from = htmlspecialchars($_POST['toFrom']);
    $to = htmlspecialchars($_POST['toTo']);
    $subject = htmlspecialchars($_POST['toSubject']);
    $message = htmlspecialchars($_POST['toMessage']);

    if($from == "" || $to == "" || $subject == "" || $message == ""){
        header("location:index.php?email=".$from);
        exit(0);
    }

    $table = "tb_pesan";
    $sql = "INSERT INTO $table (id,toFrom,toTo,toSubject,toMessage) VALUES ('','$from','$to','$subject','$message')";
    $row = $conn->query($sql);
    $response["tb_pesan"] = array($from,$to,$subject,$message);
    array_push($response['tb_pesan'], $response);
    header("location:index.php?email=".$from);
    exit(0);
}
?>