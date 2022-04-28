<!DOCTYPE html>
<html>
        <head>
                <meta charset ="utf-8">
                <title>  </title>
        </head>
      <body>

      <form  action="post.php" method="post">
          password:
           <input type="password" name="password">
          <br>
          
          <input type= "submit">
     </form>
     <br>
        
        <?php echo $_POST["password"] ?>
        <br>
       
           </body>
      </html>