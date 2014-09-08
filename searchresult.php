<html>
 <head>
  <title>Simple Web Store</title>
 </head>
<body>
<?php include 'contodb.php'; ?>
<?php session_start();?>
<div id="container" style="width:  fill-available"></div>

<div id="header" style="background-color:#FFA500;">
<h1 style="margin-bottom:0;">Simple Web Store</h1></div>

<h2>Welcome <?php echo $_SESSION['firstname']?></h2>

<?php echo '<a href ="logout.php" target="_self"> Log Out </a>'; ?></p>
<?php echo '<a href ="search.php" target="_self"> Find a book </a>'; ?></p>
<?php
    function savetosession($row)
    {
                $_SESSION['I_ID']=$row['I_ID'];
                $_SESSION['I_TITLE']=$row['I_TITLE'];
                $_SESSION['I_A_ID']=$row['I_A_ID'];
                $_SESSION['I_PUBLISHER']=$row['I_PUBLISHER'];
                $_SESSION['I_SUBJECT']=$row['I_SUBJECT'];
                $_SESSION['I_COST']=$row['I_COST'];
                $_SESSION['I_CURRENCY']=$row['I_CURRENCY'];
                $_SESSION['I_STOCK']=$row['I_STOCK'];
    }
?>
<?php   
        connToStore();
        
        $search_criterion=$_POST['searchbook'];
        if($_POST['value']== "name")
        {
             $q= "SELECT * from Items WHERE I_TITLE LIKE '$search_criterion'";
             $result = mysql_query($q);
             if($result===FALSE)
             {
                 echo 'No such book found. Please search again';
             }
             else
             {
                 while ( $row = mysql_fetch_array ($result))
                {
                    savetosession($row);
                }

                echo '<a href="productdetails.php" target="_self"> Product Details </a>';
             }

             
        }
        elseif($_POST['value']== "author")
        {
            $q= "SELECT * FROM Items inner join Authors on Items.I_A_ID = Authors.A_ID WHERE A_FNAME = '$search_criterion' or A_LNAME = '$search_criterion'";
            $result = mysql_query($q);
            if($result===FALSE)
             {
                 echo 'No such book found. Please search again';
             }
             else
             {
                 while ( $row = mysql_fetch_array ($result))
                {
                    savetosession($row);
                }

                echo '<a href="productdetails.php" target="_self"> Product Details </a>';
             }
            

            
        }
        elseif($_POST['value']=="topic")
        {
            $q= "SELECT * from Items WHERE I_SUBJECT LIKE '$search_criterion' ";
            $result = mysql_query($q);
            if($result===FALSE)
             {
                 echo 'No such book found. Please search again';
             }
            else
             {
                 while ( $row = mysql_fetch_array ($result))
                {
                    savetosession($row);
                }
                echo '<a href="productdetails.php" target="_self"> Product Details </a>';
             }

            
        }
        else
        {
            echo 'No such book found. Please search again';
        }


?>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<p><?php echo '<a href ="dbinterface.php" target="_self"> Change Database Settings </a>'; ?></p>
By Nida Farooqui </div>
    
</body>
</html>