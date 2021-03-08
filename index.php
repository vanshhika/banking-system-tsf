<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
	 <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <title>Banking System</title>
  </head>
 
  <body>  
    <?php
        include 'nav.php';
    ?>
      <div class="container-fluid">
      
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>WE WELCOME YOU TO</h3>
                  <h1>TSF BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img1/bgimg.jpg.jpg" class="img-fluid pt-2">
              </div>
            </div>
				<h3>Features Can Also Be Accessed By Hovering Over Objects.</h3>
      
            <div class="row activity text-center">
                  <div class="col-md act">
                    <a href="adduser.php"><img src="img1/adduser.jpg" class="change"></a>
					<p class="img__description">|------Add User------|</p>
                  </div>
                  <div class="col-md act">
                    <a href="transfer.php"><img src="img1/tranfer.png" class="change"></a>
					<p class="img__description">|--Transfer Money--|</p>
                  </div>
                  <div class="col-md act">
                    <a href="history.php"><img src="img1/history.png" class="change"></a>
					<p class="img__description">|Transaction History|</p>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. By <b>VANSHIKA PATEL</b> <br> TSF MARCH INTERNSHIP</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>