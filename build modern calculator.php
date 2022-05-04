<!DOCTYPE html>
<html>
        <head>
                <meta charset ="utf-8">
                <title>  </title>
        </head>
      <body>
      <form  action="build modern calculator.php" method="post">
          Number1:  <input type="number" step="0.1" name="num1"><br>
              op:       <input type="text" name="op"><br>
          Number2:  <input type="number"  step="0.1" name="num2">
          <input type= "submit">
     </form>
     <br>
         
        <?php 
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        $op=$_POST["op"];

        if($op=="+")
        {
            echo $num1+$num2;
        } else if($op=="-")
        {
            echo $num1-$num2;
        } else if($op=="*")
        {
            echo $num1*$num2;
        } else if($op=="/")
        {
            echo $num1/$num2;
        }else{
            echo"invalid operators";
        }
         ?>
      </body>
</html>