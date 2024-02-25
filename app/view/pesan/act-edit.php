<?php
require_once("../../database/koneksi.php"); 
if(isset($_POST['edit'])){
    $id = htmlspecialchars($_POST['id']);
    $from = htmlspecialchars($_POST['toFrom']);
    $to = htmlspecialchars($_POST['toTo']);
    $subject = htmlspecialchars($_POST['toSubject']);
    $message = htmlspecialchars($_POST['toMessage']);

    if($from == "" || $to == "" || $subject == "" || $message == ""){
        header("location:index.php?email=".$from);
        exit(0);
    }

    $table = "tb_pesan";
    $sql = "UPDATE $table SET toFrom = '$from', toTo = '$to', toSubject = '$subject', toMessage = '$message' where id = '$id'";
    $row = $conn->query($sql);
    $response["tb_pesan"] = array($from,$to,$subject,$message,$id);
    array_push($response['tb_pesan'], $response);
    header("location:index.php?email=".$from);
    exit(0);
}
?>