<?php 
 session_start();
 
 ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Simple Web Store</title>
<style>
         table #myTable
        {
            table-layout:fixed;
        }
     </style>
</head>

<body>
 <div id="container" style="width:  fill-available"></div>
<div id="header" style="background-color:#FFA500;">
<?php echo '<a href ="logout.php" target="_self"> Log Out </a>'; ?></p>
	<div style="margin:0px auto; width:600px;" >
    <div style="padding-bottom:10px">
    	<h1 align="center">Your Shopping Cart</h1>
    <a href="search.php">Continue Shopping</a>
    </div>
    	<div style="color:#F00"></div>
    	<table border="0" id="myTable" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="">
    	<tr><th>Item Id</th> <th>Title</th><th>Author Id</th> <th>Publisher</th><th>Subject</th><th>Cost</th><th>Currency</th><th>Stock</th><th>Quantity</th></tr>
        <tr>
        <td><?php echo $_SESSION['I_ID'] ?> </td>
        <td><?php echo $_SESSION['I_TITLE'] ?> </td>
        <td><?php echo $_SESSION['I_A_ID'] ?> </td>
        <td><?php echo $_SESSION['I_PUBLISHER'] ?> </td>
        <td><?php echo $_SESSION['I_SUBJECT'] ?> </td>
        <td><?php echo $_SESSION['I_COST'] ?> </td>
        <td><?php echo $_SESSION['I_CURRENCY'] ?> </td>
        <td><?php echo $_SESSION['I_STOCK'] ?> </td>
        <td><form action="<?php echo "productcalc.php"; ?>" method="post"> 
        <input type="text" maxlength="3" size="2" size="70" name="i_qty" value="1" /> 
        
  <select name="add_flag">
  <option value="add">Add</option>
  <option value="update">Update</option>
  </select></p>
  <p><input type="submit" name="result" value="Submit" /></p> </form> </td>
    
</tr>

</table>  
    </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<p><?php echo '<a href ="dbinterface.php" target="_self"> Change Database Settings </a>'; ?></p>
By Nida Farooqui </div>
    
</body>
</html>