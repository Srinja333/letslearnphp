<?php
class chef
{
    function makechicken()
    {
        echo"i know how to make chicken";
    }
    function makebbq()
    {
    echo"i know how to made bbq";
    }
}
class indianchef extends chef//inherit chef class
{
    function makelassi()
    {
        echo "i know how to make it";
    }
    function makebbq()//override
    {
        echo"i dont know";
    }

}

$indianchef=new indianchef();
$indianchef->makebbq();
$chef=new chef();
$chef->makelassi();//dont work because wwe cant excess child class function through perent class

?>