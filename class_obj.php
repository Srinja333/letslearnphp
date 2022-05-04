<!DOCTYPE html>
<html>
        <head>
                <meta charset ="utf-8">
                <title>  </title>
        </head>
      <body>

      
        
        <?php
         class Book
         {
             var $title;
             var $author;
             var $pages;
             function __construct($atitle,$aauthor,$apages)
             {
                 $this->title= $atitle;
                 $this->author= $aauthor;
                 $this->pages= $apages;
             }
         }
         $book1= new Book("harry potter","jk rowling",700);
         /*$book1->title="harry potter";
         $book1->author="jk rowling";
         $book1->pages=700;*/
         $book1->title=" dsa with java";

         echo $book1->title;
        

        ?>
     
        
       
           </body>
      </html>