<?php 
    include 'connection.php';
    mysqli_query($conn,"DELETE from transaction");
    $msg = "Deleted Successfully";
    header("Location:http://localhost/Internship/transaction-history.php?msg=$msg");

?>