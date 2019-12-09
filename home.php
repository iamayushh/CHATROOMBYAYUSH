<?php
session_start();
$con=mysqli_connect('localhost','root','','mydatabase');
if($con==false)
{
 echo 'connection is not done';
}
?>





<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOME</title>
            <link rel="stylesheet" type="text/css" href="home.css">
        
        
        
    </head>
    <body>
        <div id="main">
            <h1 style="background-color: #e84118;color:white;"> <?php echo $_SESSION['name'];  ?>-ONLINE</h1>
            
            <div class="output">
                <?php
                
                $sql="SELECT * FROM posts";
                $result=$con->query($sql);
                if($result->num_rows >0)
                {
                    while($row =$result->fetch_assoc())
                    {
                        echo "".$row["name"].""."::".$row["msg"]." --".$row["date"]."<br>";
                        echo "<br>";
                    }
                }
                else
                {
                    echo "0 result";
                }
                $con->close();
                
                
                
                
                
                
                
                
                
                ?>
                
                
                
                
                
                
                </div> 
                
                <form method="post" action="send.php">
                    <textarea name="msg" placeholder="Type to send msg.." class="form-control"></textarea><br>
                    <input type="submit" value="Send"> </form>
                <br>
                <form action="logout.php">
                    <input style="width:100%; background-color:#ee5253; color:white;font-size:20px;" type="submit" value="logout">
                    
                    </form></div>        </div>

                
                    
                    
                    
                    
                
                    
                    
                    
                    
                    
                    
                    
                    
               
                
                
                
                
                
                
            
            
            
            
            
            
            
            
        <?php
        // put your code here
        ?>
    </body>
</html>
