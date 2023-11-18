<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $massage = $_POST['massage'];
    $conn = new mysqli('localhost','root','test');
    if(&conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);

    }
else{
    $stmt = $conn->prepare("insert into contact(name,number,email,massage)values(?,?,?,?)");
    $stmt->bind_param("siss",$name,$number,$email,$massage);
    echo"contact successfully.....";
    $stmt->close();
    $conn->close();
}
?>

