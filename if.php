<!DOCTYPE html>
<html>
        <head>
                <meta charset ="utf-8">
                <title>  </title>
        </head>
      <body>
      
     
        <?php 
         $ismale=false;
         $istall=true;
         if($ismale && $istall)// there r another operation called or
         {
             echo "u r male and tall";

         } else if ($ismale && !$istall){

             echo "u r male but not tall";

         }else if( !$ismale && $istall){

             echo "u r not male but tall";;

         }else{
             echo " u r not male and not tall";
            
         }

        ?>
</body>
</html>