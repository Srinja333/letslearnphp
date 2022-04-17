<!DOCTYPE html>
<html>
        <head>
                <meta charset ="utf-8">
                <title>  </title>
        </head>
      <body>
        <?php 
            //we can rite php stanalone like in between <?php  ?> but here we use php in between html for use html advantages
              
          //always write code in php inbetween <?php .....?>

          /*$name="srinjay's";//'$'use for variable declearation here string use so " " used
          $age=21;//integer type so no " "
          echo("<h1>$name own site</h1><br>");// echo used for print
          echo"<hr>";
          echo"<p>$name age = $age</p><br>";
          $name="digantaleena";
          $age=23;
          echo("<h3>srinjay loved $name</h3><br>");
          echo"<p>her age = $age</p><br>";*/


          /*$str=null/ null means no value but u can use "any string";
           $num=null/null means no value but  u can use any value;
           $iamhere=true;
          echo "$str<br>";
          echo $num;*/


          $string="i am boss";
          echo strtoupper($string);//use for make string in upper case
          echo"<br>";
          echo strtolower($string);//use for make string in lower case 
          echo"<br>";
          echo strlen($string);//use for knowing the length of string 
          echo"<br>";
          echo $string[0];//in php string character start from index 0
          $string[1]="i";
          echo"<br>";
          echo"$string";
          echo"<br>";
          echo "srinju"[5];//its print the number 5 character of srinju here its print u
          echo"<br>";
          echo str_replace("boss","Goat",$string);//its replace boss in string by goat
          echo"<br>";
          echo substr($string,5,3);//1st argument is the string, 2nd arg for where to start, 3rd arg  use for how much grabing number of characters
        ?>
     </body>
</html>

    

    
