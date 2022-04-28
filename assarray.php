<!DOCTYPE html>
<html>
        <head>
                <meta charset ="utf-8">
                <title>  </title>
        </head>
      <body>

      <form  action="assarray.php" method="post">
          <input type="text" name="student">
         

          <input type= "submit">
     </form>
     <br>
        

<?php
$grades=array("jim"=>"A+","raju"=>"B-","digs"=>"D+");
/*$grades["jim"]="F";
echo $grades["jim"];
echo count($grades);*/
echo $grades[$_POST["student"]];
 ?>
 
   </body>
</html>