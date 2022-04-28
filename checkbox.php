
<!DOCTYPE html>
<html>
        <head>
                <meta charset ="utf-8">
                <title>  </title>
        </head>
      <body>

      <form  action="checkbox.php" method="post">
         Apples:<input type="checkbox" name="fruits[]" value="apples"><br>      
         Grapes:<input type="checkbox" name="fruits[]" value="grapes"><br>      
         Banana:<input type="checkbox" name="fruits[]" value="banana"><br>     

          <input type= "submit">
     </form>
     <br>
        
        <?php 

        $fruits= $_POST["fruits"];//$fruits is array
        echo $fruits[0];//tells the first fruit which has been checked

         ?>
        
       
           </body>
      </html>