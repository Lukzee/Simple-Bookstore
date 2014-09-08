<html>
 <head>
  <title>Simple Web Store</title>
 </head>
<body>
<?php include 'contodb.php'; ?>
<div id="container" style="width:  fill-available"></div>
<div id="header" style="background-color:#FFA500;">
<h1 style="margin-bottom:0;">Simple Web Store</h1></div>

<h2>Welcome <?php echo $_SESSION['firstname']?></h2>
        <?php echo '<a href ="logout.php" target="_self"> Log Out </a>'; ?></p>
        

        <?php
        

        connToStore();
        $_SESSION['userID'] = $_POST['userid'];
        $userid=$_POST['userid'];
        $userpw=$_POST['password'];
        $q= "select * from Customers WHERE C_ID = '$userid' AND C_PWD='$userpw'";
        //$q="select * from items inner join author on items.I_A_ID = author.A_ID where ";

        $result = mysql_query($q);
        if (!$result) 
        {
            printf("Error: %s\n", mysql_error($con));
            exit();
        }
        $row = mysql_fetch_array ($result);
        
            
            if($row['C_ID'] == $_POST['userid'] && $row['C_PWD']==$_POST['password'])
            {
                $_SESSION['firstname'] = $row['C_FNAME'];
                $_SESSION['lastname'] = $row['C_LNAME'];
                

            
        ?>
        <?php
         echo '<table width="200px" bgcolor="#88ccaa">';
         echo '<td>First Name</td>'; 
         //if ($debug) { echo "<th>dump</th>\n"; }

        
        // generate table
                     
        ?>   
        
        <td><?php echo $row['C_FNAME'] ?> </td>
        <tr>
        <td> Last Name: </td>
        <td><?php echo $row['C_LNAME'] ?> </td></tr>
        <tr>
        <td> Address: </td>
        <td><?php echo $row['C_ADD'] ?> </td></tr>
         <?php //if ($debug) { echo "<td>";  var_dump($row); echo "</td>\n"; } ?>
        <?php 
        echo '</table>'?> 
                   
    
        
        <?php 
            echo '<p><a href ="search.php" target="_self"> Find a book </a></p>';
            } 
 
                else echo '<p> Invalid User id and/or password combination </p>';
        

        
        ?>

















<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<p><?php echo '<a href ="dbinterface.php" target="_self"> Change Database Settings </a>'; ?></p>
By Nida Farooqui </div>
    
</body>
</html> 