<?php include('../../functions.php') ?>

<?php
  $member = find("members", $_GET["id"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400;1,600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .card {
      margin: 4rem;
      border: 2px solid #222;
      padding: .2rem 1rem;
      width: 400px;
      border-radius: 20px;
      padding-bottom: 2rem;
    }
    .card p {
      margin: 0px;
    }
    .card .card-name {
      margin-bottom: 0px;
    }
    .card-member-number {
      color: #999!important;
      margin-bottom: .8rem!important;
    }
  </style>
  <title>Print</title>
</head>
<body onload="window.print()">
  <div class="card">
    <h2 class="card-name"><?= $member['name'] ?></h2>
    <p class="card-member-number"><?= $member['member_number'] ?></p>
    <p class="card-phone-number"><b>No HP : </b><?= $member['phone'] ?></p>
    <p class="card-email"><b>Email : </b><?= $member['email'] ?></p>
  </div>
</body>
</html>