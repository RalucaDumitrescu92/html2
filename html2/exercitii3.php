<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <pre>
    <?php
    $lg=6;
    $lt=5;

    for ($j=0;$j<$lt;$j++) {
      echo "<br/>";
    for($i=0;$i<$lg;$i++) {
      if($j==0 || $j==$lt-1) {
      echo "#";
    }
      elseif ($i==0 || $i==$lg-1) {
      echo "#";
    }
    else echo "X";
      }

    }

    ?>
  </pre>
  </body>
</html>
