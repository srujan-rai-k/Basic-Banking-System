<?php
   include "connection.php";
   $from = $_POST['sendername'];
   $to = $_POST['receivername'];
   $amount = $_POST['amount'];
   $sender = mysqli_fetch_array(mysqli_query($conn,"SELECT balance from user where name = '$from' "));
   $receiver = mysqli_fetch_array(mysqli_query($conn,"SELECT name,balance from user where name = '$to' "));
   $receivername = $receiver['name'];
   $senderbalance = $sender['balance'];
   $receiverbalance = $receiver['balance'];
   $ramt1 = $senderbalance-$amount;
   $ramt2 = $receiverbalance+$amount;
   echo $receivername;
   echo $to;
   if($senderbalance < $amount){
        $msg = "Low Balance";
        header("Location:http://localhost/Internship/transaction.php?msg=$msg");
    }
   else{
       if($receivername == $to){
            date_default_timezone_set('Asia/Kolkata');
            $time = date("H:i:sA");
            $date = date("Y/m/d");
            mysqli_query($conn,"INSERT INTO transaction(sendername, receivername, amount,date,time) VALUES ('$from', '$to', '$amount', '$date', '$time')");
            mysqli_query($conn,"UPDATE user set balance = '$ramt1' WHERE name = '$from' ");
            mysqli_query($conn,"UPDATE user set balance = '$ramt2' WHERE name = '$to' ");
            $msg = "Transaction Successfull";
            header("Location:http://localhost/Internship/transaction.php?msg=$msg");
       }
       else{
            $msg = "Receiver account not found";
            header("Location:http://localhost/Internship/transaction.php?msg=$msg");
       }
    }
?>