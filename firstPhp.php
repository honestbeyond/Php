<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $name="john ,hi isme "  ;
         //0123
     echo "<h1>hello $name</h1>";
     echo "<hr>";
     echo "<p> this is my site of $name</p>";
     $age=30;
     $gpa=30.3;
     $inPerson=false;
     //NULL
     $phrase="hello $name,my age is $age,this year gpa is $gpa<br>";
     echo strtolower($name),strtoupper($name),strlen($name),$name[0],"<br>";
     echo "he"[0],"<br>";
     echo str_replace("john","mika",$name),"<br>";
     echo $name,"<br>";
     echo substr($name,5,4);//01234

     ?>
  </body>
</html>
