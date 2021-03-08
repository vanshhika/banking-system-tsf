<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <style>
    input {
          width: 40%;
          height: 5%;
          border: 1px;
          border-radius: 5px;
          padding: 8px 15px 8px 15px;
          margin: 10px 0px 15px 0px;
          box-shadow:1px 1px 2px 1px grey;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <title>Banking System</title>
  </head>
  <body>
        <?php
        include 'nav.php';
        ?><br>
        <center>
        <h1> ADD NEW USER </h1>

          <form action="" method="POST">
              <input type="text" name="name" placeholder="Enter Fullname"/><br><br>
              <input type="text" name="email" placeholder="Enter Email"/><br><br>
              <input type="number" name="balance" placeholder="Enter Balance"/><br><br>
              <input type="submit" name="submit" value="SUBMIT">
            </form>
        </center>
  </body>
  </html>    

  <?php
  include 'connect.php';
  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];

    $sql ="INSERT INTO `customertable` ( `name`, `email`, `balance`) VALUES ('$name', '$email', '$balance')";
    $sql_run = mysqli_query($conn,$sql);

    if($sql_run)
    {
      echo '<script> alert("User Added Successfully")</script>';
    }
    else
    {
      echo '<script> alert("User not  Added ")</script>';
    }
  }

  ?>