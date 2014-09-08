<html>
 <head>
     <style>
         table #myTable
        {
            table-layout:fixed;
        }
     </style>

  <title>Simple Web Store</title>
 </head>
<body>
<div id="container" style="width:  fill-available"></div>
<div id="header" style="background-color:#FFA500;">
<h1 style="margin-bottom:0;">Simple Web Store</h1></div>
<?php session_start();?>
<h2>Welcome <?php echo $_SESSION['firstname']?></h2>

<?php echo '<a href ="logout.php" target="_self"> Log Out </a>'; ?></p>
<?php echo '<a href ="search.php" target="_self"> Find a book </a>'; ?></p>
<?php echo '<a href ="shoppingcart.php" target="_self"> Go to Your Shopping Cart </a>'; ?></p>
 
<table border="1" id="myTable" background-color:#88ccaa">;
    <tr>
<th>Item Id</th> <th>Title</th><th>Author Id</th> <th>Publisher</th><th>Subject</th><th>Cost</th><th>Currency</th><th>Stock</th></tr>



<tr>
<td><?php echo $_SESSION['I_ID'] ?> </td>
<td><?php echo $_SESSION['I_TITLE'] ?> </td>
<td><?php echo $_SESSION['I_A_ID'] ?> </td>
<td><?php echo $_SESSION['I_PUBLISHER'] ?> </td>
<td><?php echo $_SESSION['I_SUBJECT'] ?> </td>
<td><?php echo $_SESSION['I_COST'] ?> </td>
<td><?php echo $_SESSION['I_CURRENCY'] ?> </td>
<td><?php echo $_SESSION['I_STOCK'] ?> </td>
    
</tr>

</table>






<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<p><?php echo '<a href ="dbinterface.php" target="_self"> Change Database Settings </a>'; ?></p>
By Nida Farooqui </div>
    
</body>
</html>