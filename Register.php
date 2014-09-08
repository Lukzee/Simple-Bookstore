<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Simple Web Store</title>
        <style type="text/css">
            
    .error {
        color: #FF0000;
    }

    .container {
        width: 500px;
        clear: both;
    }
    .container input {
        width: 100%;
        clear: both;
    }

    </style>
    </head>
    <body>
    
      <div id="container" style="width: max-content"></div>
        <div id="header" style="background-color:#FFA500;">
        <h1 style="margin-bottom:0;">Simple Web Store</h1></div>
    <p><?php echo '<a href ="index.php" target="_self"> Home </a>'; ?></p>
<?php
    
// define variables and set to empty values
$firstnameErr = $lastnameErr = $useridErr = $passwordErr=  "";
$firstname = $lastname = $userid = $password = $address = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        if (empty($_POST["firstname"]))
       {
            $firstnameErr = "First Name is required";
       }
       else
       {
             $firstname = test_input($_POST["firstname"]);
             // check if name only contains letters and whitespace
             if (!preg_match("/^[a-zA-Z ]*$/",$firstname))
             {
                $firstnameErr = "Only letters and white space allowed"; 
             }
        }
 

        if (empty($_POST["lastname"]))
        {
            $lastnameErr = "Last Name is required";
        }
        else
        {
            $lastname = test_input($_POST["lastname"]);
            // check if name only contains letters and whitespace
             if (!preg_match("/^[a-zA-Z ]*$/",$lastname))
             {
                $lastnameerr = "Only letters and white space allowed"; 
             }
        }

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

        if (empty($_POST["address"]))
        {
            $address = "";
        }
        else
        {
            $address = test_input($_POST["address"]);
        }

     }
 
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    

?>

<?php

if (!isset($first_name) || !isset($last_name) || !isset($user_name) || !isset($password)) { 
?>
    <h2>Register Here </h2>
    <p><span class="error">* required field.</span></p>
  
    <form style='margin: 0; padding: 0'action="<?php echo "insert.php"; ?>" method="post">
        <table>
    <tr>
    <td><label style="vertical-align: middle">First Name: </label></td> 
    <td><input type="text" name="firstname" value="<?php echo $firstname;?>" />
    <span class="error">* <?php echo $firstnameErr;?></span>
    </td>
    </tr>

    <tr>
    <td><label>Last Name: </label></td>
    <td><input type="text" name="lastname" value="<?php echo $lastname;?>"/>
    <span class="error">* <?php echo $lastnameErr;?></span>
    </td>
    </tr>

    <tr>
    <td><label>User ID :   </label></td>  
    <td><input type="text" name="userid" value="<?php echo $userid;?>"/>
    <span class="error">* <?php echo $useridErr;?></span>
    </td>
    </tr>

    <tr>
    <td><label>Password  : </label></td>
    <td><input type="password" name="password" value="<?php echo $password;?>"/>
    <span class="error">* <?php echo $passwordErr;?></span>
    </td>
    </tr>

    <tr>
    <td><label>Address        : </label></td>
    <td><textarea rows="4" cols="50" name="address" value="<?php echo $address;?>"> </textarea></td>
    </tr>
    </table> 
    <p><input style='display:inline;' type="submit" name="register" value="Register"> </p>
     
    </form> 
 
 
    <?php 
}

?>
 
 

<br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
By Nida Farooqui </div>
</body>
</html>
