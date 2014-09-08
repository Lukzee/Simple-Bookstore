<?php
session_start();
$i_qty=0;
//$_SESSION['cart'] = array();
$i_id= $_SESSION['I_ID'];
$i_qty = $_POST['i_qty'];
$_SESSION['i_qty']=$_POST['i_qty'];

$_SESSION['cart'][$i_qty] = array_key_exists('cart', $_SESSION)?$_SESSION['cart'][$i_qty]:array();
$cart = array(
    'user' => $_SESSION['userID'],
    'cart' => array(
        'i_id' => $i_qty
        
    ),
);

$item =0;
$_SESSION['cart'][$item]['productid']=$i_id;
$_SESSION['cart'][$item]['qty']=$i_qty;    

    if($_POST['add_flag']== "add")
        {
            
            if(!($i_qty > $_SESSION['I_STOCK']))
            {
                addtocart($i_id,$i_qty);
                $cost= $_SESSION['I_COST'];
                foreach($cart['cart'] as $value)
                {
                    $value= $i_qty;
                    $totalcost = $cost * $value;
                    $_SESSION['cost']= $totalcost;
                }
                $tcost= get_order_total();
                $_SESSION['T_COST']=$tcost;
                
                
             }
             else
             {
                 echo'Sorry, you can not order above the stock limit.';
             }
             
        }
       
        elseif($_POST['add_flag']== "update")
        {
            if(!$i_qty > $_SESSION['I_STOCK'])
            {
                $cost= $_SESSION['I_COST'];
                foreach($cart['cart'] as $value)
                {
                    $value= $i_qty;
                    $totalcost = $cost * $value;
                
                }
                $_SESSION['cart'][$item]['qty']=$i_qty;
                $tcost= get_order_total();
             }
             else
             {
                 echo'Sorry, you can not order above the stock limit.';
             }
          
        }

       
             
              function addtocart($i_id,$i_qty)
              {
	            if($i_id<1 or $i_qty<1) 
                {
                    return;
                }
 
	            if(is_array($_SESSION['cart']))
                {
		            if(product_exists($i_id)) return;
		            $item=count($_SESSION['cart']);
		            $_SESSION['cart'][$item]['productid']=$_SESSION['I_ID'];
		            $_SESSION['cart'][$item]['qty']=$_POST['i_qty'];
	            }
	            else
                {
		            $_SESSION['cart']=array();
		            $_SESSION['cart'][0]['productid']=$_SESSION['I_ID'];
		            $_SESSION['cart'][0]['qty']=$_POST['i_qty'];
                }
	          }

              function product_exists($i_id)
              {
	                $i_id=intval($i_id);
	                $item=count($_SESSION['cart']);
	                $flag=0;
	                for($i=0;$i<$item;$i++)
                    {
		                if($i_id==$_SESSION['cart'][$i]['productid'])
                        {
			                $flag=1;
			                break;
		                }
	                }
	                return $flag;
               }

        function get_order_total(){
		$item=count($_SESSION['cart']);
        
		$sum=0;
		for($i=0;$i<$item;$i++)
        {
			$i_id=$_SESSION['cart'][$i]['productid'];
           
			$i_qty=$_SESSION['cart'][$i]['qty'];
            
			$price=$_SESSION['I_COST'];
            
			$sum+=($price*$i_qty);
		}
		return $sum;
	}
     
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
<?php echo '<a href ="index.php" target="_self"> Home </a>'; ?></p>
	<div style="margin:0px auto; width:600px;" >
    <div style="padding-bottom:10px">
    	<h1 align="center">Your Shopping Cart</h1>
     <a href="shoppingcart.php">Back to Shopping Cart</a>
    <a href="search.php">Continue Shopping</a>
    </div>
    	<div style="color:#F00"></div>
    	<table border="0" id="myTable" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="">
    	<tr><th>Item Id</th> <th>Title</th><th>Author Id</th> <th>Publisher</th><th>Subject</th><th>Cost</th><th>Currency</th><th>Stock</th><th>Current Quantity</th><th>Current Cost</th><th>Total Cost</th></tr>
        <tr>
        <td><?php echo $_SESSION['I_ID'] ?> </td>
        <td><?php echo $_SESSION['I_TITLE'] ?> </td>
        <td><?php echo $_SESSION['I_A_ID'] ?> </td>
        <td><?php echo $_SESSION['I_PUBLISHER'] ?> </td>
        <td><?php echo $_SESSION['I_SUBJECT'] ?> </td>
        <td><?php echo $_SESSION['I_COST'] ?> </td>
        <td><?php echo $_SESSION['I_CURRENCY'] ?> </td>
        <td><?php echo $_SESSION['I_STOCK'] ?> </td>
        <td><?php echo $_SESSION['i_qty'] ?> </td>
        <td><?php echo $_SESSION['cost'] ?> </td>   
        <td><?php echo $_SESSION['T_COST'] ?> </td>
    
</tr>

</table>  
    </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<p><?php echo '<a href ="dbinterface.php" target="_self"> Change Database Settings </a>'; ?></p>
By Nida Farooqui </div>
    
</body>
</html>