<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $conn =new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('connection failes : '.$conn->connect_error);
        }
    else{
        $stmt = $conn->prepare("insert into registeration(firstname , lastname)
           values(? ,? )");
        $stmt->bind_param("ss",$firstname,$lastname);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();
?>