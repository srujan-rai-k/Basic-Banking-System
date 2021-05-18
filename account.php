<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];

    $connection = 'connection.php';
    include $connection;
    $sql = "INSERT INTO user(name,email,balance) VALUES ('$name', '$email', '$balance')";

    if (mysqli_query($conn, $sql)){
            $msg = "Registered Successfully";
            header("Location:http://localhost/Internship/create.php?msg=$msg");
    }
    else {
        $msg =  mysqli_error($conn);
    }
    header("Location:http://localhost/Internship/create.php?msg=$msg");
    mysqli_close($conn);

?>