<!DOCTYPE html>
<html>
        <head>
                <meta charset ="utf-8">
                <title>  </title>
        </head>
      <body>
      
     
        <?php 
         function max3($n1,$n2,$n3)
         {
            
            if($n1>=$n2 && $n1>=$n3)
            {
                return $n1;
            }
             else if($n2>=$n1 && $n2>=$n3)
            {
                return $n2;
            }
            else{
                return $n3;
            }
        }
         echo max3(666,33,22);
        

        ?>
</body>
</html>