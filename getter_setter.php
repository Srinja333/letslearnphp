<?php
class movie
{
    public  $title;
    private $rating;
function __construct($atitle,$arating)
{
    $this->title=$atitle;
    $this->setrating($arating);
}
function getrating(){
    return $this->rating;
}
function setrating($rating)
{
    if($rating=="G" || $rating=="PG"|| $rating="io")
    {
        $this->rating=$rating;
    }
    else{
        $this->rating="NR";
    }

}

}
$avengers=new movie("av","G");

echo $avengers->getrating();



?>