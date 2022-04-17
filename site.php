<!DOCTYPE html>
<html>
        <head>
                <meta charset ="utf-8">
                <title>  </title>
        </head>
      <body>
        <?php 

          /*$name="srinjay's";
          $age=21;
          echo("<h1>$name own site</h1><br>");
          echo"<hr>";
          echo"<p>$name age = $age</p><br>";
          $name="digantaleena";
          $age=23;
          echo("<h3>srinjay loved $name</h3><br>");
          echo"<p>her age = $age</p><br>";*/


          /*$str=null/"any string";
           $num=null/any value;
           $iamhere=true;
          echo "$str<br>";
          echo $num;*/


          $string="i am boss";
          echo strtoupper($string);
          echo"<br>";
          echo strtolower($string);
          echo"<br>";
          echo strlen($string);
          echo"<br>";
          echo $string[0];
          $string[1]="i";
          echo"<br>";
          echo"$string";
          echo"<br>";
          echo "srinju"[5];
          echo"<br>";
          echo str_replace("boss","Goat",$string);
          echo"<br>";
          echo substr($string,5,3);//last index use for grabing number of characters
        ?>
     </body>
</html>

    