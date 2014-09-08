

<?php
        session_start();
    
        
       
        function connToStore()
        { 
            global $db_host;
            global $db_user; 
            global $db_pass;  
            global $db_name; 

            $db_host= $_SESSION['db_host'];
            $db_user= $_SESSION['db_user'];
            $db_pass= $_SESSION['db_pass']; 
            $db_name= $_SESSION['db_name'];
            $dsn = "mysql://$db_user:$db_pass@unix+$db_host/$db_name";

            global $con;
           
                $con = mysql_connect($db_host, $db_user, $db_pass);
            if (!$con)
            {
            die('Could not connect: ' . mysql_error());
            }
            else{
                
                 mysql_select_db($db_name, $con);
            }
            
            
            
            

           
        }


        function closedbconn()
        {
            mysql_close($con);
            
        }
  ?>



