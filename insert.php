<html>
 <head>
  <title>Simple Web Store</title>
 </head>
<body>
<?php include 'contodb.php'; ?>
<div id="container" style="width:  fill-available"></div>
<div id="header" style="background-color:#FFA500;">
<h1 style="margin-bottom:0;">Simple Web Store</h1></div>
<?php session_start();?>
<h2>Welcome <?php echo $_SESSION['firstname'];?>  <?php echo $_SESSION['lastname'];?> </h2>
    <em> You have succesfully registered! </em>
        <?php echo '<a href ="logout.php" target="_self"> Log Out </a>'; ?></p>
        <?php echo '<a href ="search.php" target="_self"> Find a book </a>'; ?></p>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
By Nida Farooqui </div>
    
</body>
</html>


<?php
  
   connToStore();


    
    $_SESSION['userID'] = $_POST['userid'];
    $_SESSION['firstname']= $_POST['firstname'];
    $_SESSION['lastname']= $_POST['lastname'];
    $sql="INSERT INTO Customers (C_ID,C_PWD,C_FNAME,C_LNAME,C_ADD)
    VALUES
    ('$_POST[userid]','$_POST[password]','$_POST[firstname]','$_POST[lastname]','$_POST[address]')";

    if (!mysql_query($sql))
    {
        die('Error: ' . mysql_error($con));
    }

    

?>

