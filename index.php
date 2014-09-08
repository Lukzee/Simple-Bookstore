<html>
 <head>
  <title>Simple Web Store</title>
    <style>
        .error 
        {
            color: #FF0000;
        }
    </style>
 </head>
<body>
<div id="container" style="width:  fill-available"></div>

<div id="header" style="background-color:#FFA500;">
<h1 style="margin-bottom:0;">Simple Web Store</h1></div>
<h2>Welcome </h2>

<?php
session_start();

$_SESSION['db_host']= "mysql-server-1"; // gethostname() mysql-server-1; // PHP 5.3 onwards
$_SESSION['db_user']= 'naf31';
$_SESSION['db_pass']='abcnaf31354';
$_SESSION['db_name']='naf31';
$debug = 0;



$self = basename($_SERVER['PHP_SELF']);

if ($debug){ 
    print "<font size=-1 color=grey>\n";
    print "<p>Received: number=$user_name; type=$username<br>\n";
    print "<p>SELF = $self<br>\n";
    print "</font>\n";

}
?>
<?php
    
// define variables and set to empty values
 $useridErr = $passwordErr=  "";
 $userid = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {


        if (empty($_POST["userid"]))
        {
            $userid = "User ID is required";
        }
        else
        {
            $userid = test_input($_POST["userid"]);
            if($userid <1 && $userid >11 )
            {
                $useridErr="The user ID must be between 1 and 11 numeric values";
            }
        }
        if (empty($_POST["password"]))
        {
            $passwordErr = "Password is required";
        }
        else
        {
            $password = test_input($_POST["password"]);
            if($password < 4 and $password> 16)
            {
                $passwordErr="Password must be between 6 and 16 characters.";
            }
        }


     }
 
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

   
    // did we receive a username
if (!isset($user_name) || !isset($password)) { // No: show the form to enter one
?>


    <p> Are You an Existing Customer?</p>
    <p>Login Below   or   <?php echo '<a href="Register.php" target="_self"> Register Here </a>'; ?> </p>  <br>
    <p><span class="error">* required field.</span></p>
    <form action="<?php echo "details.php"; ?>" method="post">
    <table>
    <tr>
    <td>User ID: </td><td><input type="text" name="userid"  />
    <span class="error">* <?php echo $useridErr;?></span>
    </td>
    </tr>
    <tr>
     <td>Password: </td><td><input type="password" name="password" />
     <span class="error">* <?php echo $passwordErr;?></span>
    </td>
    </tr>
    </table>
    <div id="login"><div id="loginbutton"><input type="submit" name="login" class="login" value="Login" /></div> </div></form>
 



<?php 


}
 


?>
<br><br><br><br><br><br><br><br><br><br><br>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<p><?php echo '<a href ="dbinterface.php" target="_self"> Change Database Settings </a>'; ?></p>
By Nida Farooqui </div>
    
</body>
</html> 