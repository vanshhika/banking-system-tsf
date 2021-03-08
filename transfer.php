<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <title>Banking System</title>
  </head>
  <body>
        <?php
            include 'connect.php';
            $sql="SELECT * FROM customertable";
            $sql_run = mysqli_query($conn,$sql);
        ?>
        <?php
            include 'nav.php';
        ?>
        <div class='part1'>
        <center>
        <h3> SELECT THE CUSTOMER WHO WANTS TO TRANSACT MONEY</h3>
        <table class='part2'>
        <thead class='part3'>
            <tr>
                <th>ID</th> 
                <th>NAME</th> 
                <th>EMAIL</th> 
                <th>BALANCE</th> 
                <th>TRANSFER</th>
            </tr> 
        </thead>
        <tbody>
            <?php   // LOOP TILL END OF DATA  
                while($rows=$sql_run->fetch_assoc()) 
                { 
             ?> 
            <tr class='p5'> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td class='p4'><?php echo $rows['cid'];?></td> 
                <td class='p4'><?php echo $rows['name'];?></td> 
                <td class='p4'><?php echo $rows['email'];?></td> 
                <td class='p4'><?php echo $rows['balance'];?></td>
               <td><a href="select.php?cid= <?php echo $rows['cid'] ;?>"> <button type="button" class="btn">SELECT</button></a></td>
            </tr> 
            <?php 
                } 
             ?> 
             </tbody>
        </table> 
        </center>
        </div>


  </body>
  </html>