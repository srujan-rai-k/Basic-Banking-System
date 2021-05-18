<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Dhan Bank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/framework.css" type="text/css">
    <link rel="stylesheet" href="css/homepage.css" type="text/css">
    <link rel="stylesheet" href="css/layout.css" type="text/css">
    <link rel="stylesheet" href="css/topnavigationbar.css" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="home.js"></script>
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
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>



<div class="wrapper bgded overlay gradient">
  <div id="pageintro" class="hoc clear"> 
    <article>  
      <img id="top-image" src="image/bank-image.png">    
      <h3 class="heading">Welcome To Dena Bank</h3>
      <p class="sentence">The Dena Bank is the India's central bank. Our mission is to deliver monetary and financial stability for the people of the India.
      The Dena Bank provides personal banking services including current accounts, credit cards, online and mobile banking, personal loans, savings and more...
      </p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="transaction.php">Transfer Money</a></li>
        </ul>
      </footer>
    </article>
  </div>
</div>




<div class="wrapper row2">
  <section class="hoc container clear"> 
    <ul class="nospace group prices">
      <li class="one_third">
        <article><img class="imgicons" src="image/user.png">
          <h6 class="heading">Create User</h6>
          <p>Create your account now for free</p>
          <footer><a class="btn" href="create.php">Register</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><img class="imgicons" src="image/transfer.png">
          <h6 class="heading">Transfer Money</h6>
          <p>Transfer money to your loved ones</p>
          <footer><a class="btn" href="transaction.php">Transfer</a></footer>
        </article>
      </li>
      <li class="one_third">
      <article><img class="imgicons" src="image/history.png">
          <h6 class="heading">Transfer History</h6>
          <p>See your money transaction history</p>
          <footer><a class="btn" href="transaction-history.php">History</a></footer>
        </article>
      </li>
    </ul>
  </section>
</div>


<div class="creators">
    <div class="hoc container testimonial clear">
      <h1 class="creatornames">Creator</h1> 
      <article><img src="image/srujan.png" alt="srujan">
        <h6 class="heading">Srujan Rai K</h6>
      </article>
    </div>
</div>



    <div class="wrapper row3">
      <section id="cta" class="hoc container clear"> 
        <ul class="nospace clear">
          <p class="text-center"><b>© Srujan Rai K</b></p>          
        </ul>
      </section>
    </div>
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

</body>
</html>