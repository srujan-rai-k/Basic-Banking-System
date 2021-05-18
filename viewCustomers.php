<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Customers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" type="image/png" href="image/bank.png">
    <link rel="stylesheet" type="text/css" href="/webjars/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/money-transfer.css" type="text/css">
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

  <section>
      <div class="mb-3">
        <h3 class="text-center">All customers List</h3>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="casesupdate">
          <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Balance</td>
            <td>Transfer</td>
          </tr>

          <?php
            include "connection.php";
            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) 
            {
              while($row = $result->fetch_assoc()) {
              ?>
              <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>₹ <?php echo $row['balance']; ?></td>
                <td><button class='transfer'><a href="transaction.php?id=<?php echo $row["id"];?>"><?php echo "Transfer" ?></a></button></td>
              </tr>
              <?php
              }
            }
            ?>
        </table>
      </div>
    </section>
    

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
