<?php 

$array = [1,2,3,4,5,6,7,8,9,10];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>Deployment test 123</h1>
    <a href="/deployment/about.html">About</a>

    <?php foreach($array as $a) { 
      echo $a . '<br/>';
    } ?>
  </body>
</html>
