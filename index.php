<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    
      <?php

        $test = "<h1>Testna varijabla</h1>";
        $test2 = '';
        $test .= $test2;
        echo $test;
        
      ?>

<form method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

<?php
  var_dump($_POST)

?>
  
  </body>
</html>