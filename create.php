<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create new account</title>
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

<svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
<path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
<path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
</svg>
    
  <h2 class="text-center">Create You account</h2>
    <p>Please fill in your credentials.</p>
    <form action="account.php" method="POST">
        <div class="form-group">
            <label>Name</i></label>
            <input type="text" name="name" placeholder="Enter your name" class="form-control">
        </div>    
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" pattern=".+@.+" class="form-control">
        </div>
        <div class="form-group">
            <label>Balance</label>
            <input type="number" name="balance" placeholder="Enter your Balance" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-primary" value="Reset">
        </div>
    </form>
 </div> 
  

<script>

        if ("<?php if(isset($_GET['msg'])) echo $_GET['msg'];?>" == "Registered Successfully") {
            swal({
            icon: "success",
            title: "Registered successfully !",
            showConfirmButton: true,
            confirmButtonText: "Cerrar",
            closeOnConfirm: false
        }).then(function(result)
            {
            window.location = "create.php";
            }
        )}

        else if("<?php if(isset($_GET['msg'])) echo $_GET['msg'];?>" == "Duplicate name") {
            swal({
            icon: "error",
            title: "Already registered",
            showConfirmButton: true,
            confirmButtonText: "Cerrar",
            closeOnConfirm: false
        }). then(function(result)
        {
        window.location = "create.php";
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
