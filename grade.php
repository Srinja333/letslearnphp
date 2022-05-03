<!DOCTYPE html>
<html>
        <head>
                <meta charset ="utf-8">
                <title>  </title>
        </head>
      <body>

      <form  action="grade.php" method="post">
          what was ur grade???
           <input type="text" name="grade">
          <br>
          
          <input type= "submit">
     </form>
     <br>
        
        <?php 
        $grade=$_POST["grade"];
        switch($grade)
        {
          case "A":
            echo"u did amazing";
            break;
            case "B":
                echo "u did pretty good";
                break;
                case"C":
                    echo "u did poor";
                    break;
                    case "D":
                        echo"u did very bad";
                        break;
                        case "F":
                            echo" u r fail";
                            break;
                            default:
                                echo "invalid grade! check ur result";

        }
         ?>
        <br>
       
           </body>
      </html>