<!DOCTYPE html>
<html>
        <head>
                <meta charset ="utf-8">
                <title>  </title>
        </head>
      <body>
      <form  action="madlibs.php" method="get">
          
          color: <input type="text" name="color"> <br>
          pluralNoun: <input type="text" name="pluralNoun"><br>
          celebrity: <input type="text" name="celebrity"><br>
          <input type= "submit">
     </form>

      <br><br>
        
        <?php

         $color=$_GET ["color"];
         $pluralNoun=$_GET ["pluralNoun"];
         $celebrity=$_GET ["celebrity"];

         echo "roses are $color <br>";
         
         echo"$pluralNoun are blue <br>";
         
         echo"i love $celebrity <br>";
         

        ?>
       
           </body>
      </html>