<?php
include 'connect.php';

if(isset($_POST['submit']))
{
    $out = $_GET['cid'];
    $in = $_POST['in'];
    $amt = $_POST['amt'];

    $sql = "SELECT * from customertable where cid=$out";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from customertable where cid=$in";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

    if (($amt)<0)
   {
        echo '<script>alert("cannot transfer negative value")</script>';
       
    }

    else if($amt > $sql1['balance']) 
    {

        echo '<script>alert("sorry you do not have required balance")</script>';
    }

    else {

                
                $newbalance = $sql1['balance'] - $amt;
                $sql = "UPDATE customertable set balance=$newbalance where cid=$out";
                mysqli_query($conn,$sql);


                
                $newbalance = $sql2['balance'] + $amt;
                $sql = "UPDATE customertable set balance=$newbalance where cid=$in";
                mysqli_query($conn,$sql);

                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO history(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amt')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='history.php';
                           </script>";

                }

                $newbalance= 0;
                $amt =0;
        }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Banking System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body>

<?php
  include 'nav.php';
?>

	<div class="part2">
        <h3">Transaction</h3>
            <?php
                include 'connect.php';
                $sid=$_GET['cid'];
                $sql = "SELECT * FROM  customertable where cid=$sid";
                $sql_run=mysqli_query($conn,$sql);
                if(!$sql_run)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=$sql_run->fetch_assoc();
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="part3">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                </tr>
                <tr class='p5'>
                    <td class="p4"><?php echo $rows['cid'] ?></td>
                    <td class="p4"><?php echo $rows['name'] ?></td>
                    <td class="p4"><?php echo $rows['email'] ?></td>
                    <td class="p4"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label>Transfer Money::</label>
        <select name="in" required>
            <option value="" disabled selected>Choose to whom you want to send</option>
            <?php
                include 'connect.php';
                $sid=$_GET['cid'];
                $sql = "SELECT * FROM customertable where cid!=$sid";
                $sql_run=mysqli_query($conn,$sql);
                if(!$sql_run)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = $sql_run->fetch_assoc()) {
            ?>
                <option class="table" value="<?php echo $rows['cid'];?>" >
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 

                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" class="part6" name="amt" required>   
            <br><br>
                <div >
            <button class="btn" name="submit" type="submit" id="btn">Send</button>
            </div>
        </form>
    </div>
</body>
</html>