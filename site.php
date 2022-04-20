<!DOCTYPE html>
<html>
        <head>
                <meta charset ="utf-8">
                <title>  </title>
        </head>
      <body>
        <?php 
            /*we can write php stanalone like in between <?php...?> but here we use php in between html for use html advantages
              
          always write code in php inbetween<?php.....?>*/
              
         //introduction to variable and data types 
          $name="srinjay's";//'$'use for variable declearation here string use so " " used
          $age=21;//integer type so no " "
          echo("<h1>$name own site</h1><br>");// echo used for print
          echo"<hr>";
          echo"<p>$name age = $age</p><br>";
          $name="doggy";
          $age=23;
          echo("<h3>srinjay loved $name</h3><br>");
          echo"<p>her age = $age</p><br>";

           $str=null;// null means no value but u can use "any string";
           $num=null;//null means no value but  u can use any value;
           $iamhere=true;
          echo "$str<br>";
          echo $num;

        //playing with strings
          $string="i am boss";
          echo strtoupper($string);//use for make string in upper case
          echo"<br>";
          echo strtolower($string);//use for make string in lower case 
          echo"<br>";
          echo strlen($string);//use for knowing the length of string 
          echo"<br>";
          echo $string[0];//in php string character start from index 0
          $string[1]="i";//replace the particular index's character
          echo"<br>";
          echo"$string";
          echo"<br>";
          echo "srinju"[5];//its print the number 5 character of srinju here its print u
          echo"<br>";
          echo str_replace("boss","Goat",$string);//its replace boss in string by goat
          echo"<br>";
          echo substr($string,5,3);//1st argument is the string, 2nd arg for where to start, 3rd arg  use for how much grabing number of characters
              
          //playing with numbers    
          echo 40;
          echo "<br>";
          echo 40.998;
          echo "<br>";
          echo 5-9;
          echo "<br>";
          echo (4+5)*10;
          echo "<br>";
          $num=90;
          echo $num++;//it gives 90 , but ++$num gives 91 if we use it in  echo section
          echo "<br>";
          echo $num;// it gives 91
          echo "<br>";
          $num++;
          echo $num;//it gives 92
          echo "<br>";
          $num=$num+90;//its as same as $num += 90, we can use instead of + also -,*,%,/
          echo $num;
          echo "<br>";
          echo abs(-100);//use to give absolute values
          echo "<br>";
          echo pow(2,4); // it gives 2 to the poer 4
          echo "<br>";
          echo sqrt(144);// gives square root
          echo "<br>";
          echo max(2,10*9);//give max no
          echo "<br>";
          echo min(80,90*2);//give min no
          echo "<br>";
          echo round(3.2);//it gives 3
          echo "<br>";
          echo round(3.7);//it gives 4
          echo "<br>";
          echo ceil(3.7);//rounded up give 4
          echo "<br>";
          echo floor(3.9);//rounded down give 3
        ?>
     </body>
</html>

    

    
