<?php
class Student
{
    var $name;
    var $major;
    var $gpa;
    function __construct($aname,$amajor,$agpa)
    {
        $this->name=$aname;
       $this->major=$amajor;
       $this->gpa=$agpa;
    }
    function hashonours()
    {
        if($this->gpa<=3.4)
         return "true";
        else
         return "false";
    }
}
$student1= new student( "ayan","science",1.3);
echo $student1->hashonours();

?>