<!DOCTYPE html>
<html>
        <head>
                <meta charset ="utf-8">
                <title>  </title>
        </head>
      <body>

      <form  action="form.php" method="get">
          Name:
           <input type="text" name="username">
          <br>
          Age:
            <input type="number" name="age">
          <input type= "submit">
     </form>
     <br>
        your Name is : 
        <?php echo $_GET["username"] ?>
        <br>
        your Age is :
         <?php echo $_GET["age"] ?>
           </body>
      </html>