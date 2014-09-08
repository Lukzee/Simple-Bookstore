<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
#formWrapper{
    width:550px;
    padding: 2em 0 2em 0;
    border:solid 5px #F1F1F1;
    margin-top: 10px;
    margin-right: auto;
    margin-bottom: 0;
    margin-left: auto;
    background-color: #AFC8DE;
}
.details
{
    text-align: center;
}
</style>
        <meta charset="utf-8" />
        <title>Simple Web Store</title>
    </head>
    <body>

        <div id="container" style="width: max-content"></div>
        <div id="header" style="background-color:#FFA500;">
        <h1 style="margin-bottom:0;">Simple Web Store</h1></div>
        <?php session_start();?>
        <h2> Welcome <?php echo $_SESSION['firstname']?></h2>
        <h3>  You are logged in </h3>
        
       
        <p>
        <?php echo '<a href ="logout.php" target="_self"> Log Out </a>'; ?></p>

        
        <div id="formWrapper">
            <div class="details">
        <h3>Search</h3> </div>
            <div class="details">
         <form action="<?php echo "searchresult.php"; ?>" method="post"> 
         <input type="text" style="width: fill-available" size="70" name="searchbook" /> 
        
  <select name="value">
  <option value="name">Name</option>
  <option value="author">Author</option>
  <option value="topic">Topic</option>
  </select></p>
  <p><input type="submit" name="result" value="Search" /></p> </form></div></div></div>     
       
        
   
<br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<p><?php echo '<a href ="dbinterface.php" target="_self"> Change Database Settings </a>'; ?></p>
By Nida Farooqui </div>
</body>
</html>

