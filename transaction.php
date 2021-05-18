<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transfer Money</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/framework.css" type="text/css">
    <link rel="stylesheet" href="css/homepage.css" type="text/css">
    <link rel="stylesheet" href="css/layout.css" type="text/css">
    <link rel="stylesheet" href="css/topnavigationbar.css" type="text/css">
    <link rel="stylesheet" href="css/create.css" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="home.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" type="image/png" href="image/bank.png">
    <link rel="stylesheet" type="text/css" href="/webjars/bootstrap/css/bootstrap.min.css" />
</head>

<body id="top">

  <div class="topnav" id="myTopnav">
    <a href="index.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i> Home</a>
    <a href="create.php"><i class="fa fa-edit"></i> Create</a>
    <a href="viewCustomers.php"><i class="fa fa-users" aria-hidden="true"></i> View Customers</a>
    <a href="transaction.php"><img class="icons" src="image/money.png"> Transfer</a>
    <a href="transaction-history.php"><img class="icons" src="image/history.png"> Transfer History</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
  </div>

  <div class="form-body"> 
    
  <h2 class="text-center">Transfer Money</h2>
    <p>Please fill in your credentials correctly.</p>
    <form action="processing.php" method="POST">
    <?php
   include "connection.php";
   $row['name'] = "Enter Sender name";
   $result = mysqli_query($conn,"SELECT name from user where id='" . $_GET['id'] . "' ");
   $row= mysqli_fetch_array($result);
   $name = $row['name'];
?>

        <div class="form-group">
            <label>From</i></label>
            <input type="text" name="sendername" placeholder="Enter sender name" value="<?php echo $name ?>" class="form-control">
        </div>    
        <div class="form-group">
            <label>To</label>
            <input type="text" name="receivername" placeholder="Enter receiver name" class="form-control">
        </div>
        <div class="form-group">
            <label>Amount</label>
            <input type="number" name="amount" placeholder="Enter transaction amount" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-primary" value="Reset">
        </div>
    </form>
 </div> 
  

<script>

        if ("<?php if(isset($_GET['msg'])) echo $_GET['msg'];?>" == "Transaction Successfull") {
            swal({
            icon: "success",
            title: "Transaction successfull!",
            showConfirmButton: true,
            confirmButtonText: "Cerrar",
            closeOnConfirm: false
        }).then(function(result)
          {
            window.location = "transaction.php";
          }
        )}

        else if("<?php if(isset($_GET['msg'])) echo $_GET['msg'];?>" == "Low Balance") {
            swal({
            icon: "error",
            title: "Transaction failed",
            showConfirmButton: true,
            confirmButtonText: "Cerrar",
            closeOnConfirm: false
        }). then(function(result)
          {
            window.location = "transaction.php";
          }
        )}

        else if("<?php if(isset($_GET['msg'])) echo $_GET['msg'];?>" == "Receiver account not found") {
            swal({
            icon: "error",
            title: "Receiver account not found",
            showConfirmButton: true,
            confirmButtonText: "Cerrar",
            closeOnConfirm: false
        }). then(function(result)
          {
            window.location = "transaction.php";
          }
        )}
</script>

  <div class="wrapper row3">
      <section id="cta" class="hoc container clear"> 
        <ul class="nospace clear">
          <p class="text-center"><b>© Srujan Rai K</b></p>          
        </ul>
      </section>
    </div>
  <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>

</body>
</html>
