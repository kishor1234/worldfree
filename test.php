

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <center>
    <?php
   if(isset($_POST)){ echo urlencode($_POST["amt"]);}
?>

        
        <form action="http://worldfree4u2.com/test.php" method="post">
            <lable>Enter URL:</lable>
            <input type="text" name="amt">
            <input type="submit" value="Encode">
        </form>
        </center>
    </body>
    
</html>
