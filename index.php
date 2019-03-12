<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $students[0]['name'] = "Matěj Kneifl";
    $students[0]['points'] = 10;
    $students[1]['name'] = "Matěj Dalekorej";
    $students[1]['points'] = 10;
    $students[2]['name'] = "Kristouš Klimek";
    $students[2]['points'] = 10;
     for ($i=0; $i < 3; $i++) {
       echo "Student : " . $students[$i]['name'];
       echo ", Má bodů : " . $students[$i]['points'] ;
       echo " . <br>";
     }
     ?>
  </body>
</html>
