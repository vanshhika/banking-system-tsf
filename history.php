<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <title>Banking System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body>

<?php
  include 'nav.php';
?>

	<div class="part1">
        <center>
        <h3>Transaction History</h3>
        <table class='part2'>
        <thead class='part3'>
                <tr>
                <th>S.No.</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connect.php';
            $sql ="select * from history";
            $sql_run =mysqli_query($conn, $sql);
            while($rows = $sql_run->fetch_assoc())
            {
        ?>

            <tr class='p5'>
                 <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
            <td class="p4"><?php echo $rows['sid']; ?></td>
            <td class="p4"><?php echo $rows['sender']; ?></td>
            <td class="p4"><?php echo $rows['receiver']; ?></td>
            <td class="p4"><?php echo $rows['balance']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>
    </center>
</div>
</body>
</html>