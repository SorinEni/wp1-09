<?php
$HP = 100;
define ('MaxDmg', 33);
define ('MinDmg', 5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krteček zabiják</title>
</head>
<body>
    <?php

    do {
        $HP = $HP - rand(MinDmg, MaxDmg); if ($HP < 0) {
        $HP = 0;
    } echo  "<br>Krteček tě praštil motykou, zbývá ti $HP HP. ";
    
    }while($HP > 0);
 
      if ($HP <= 0) {
         echo " <br><b>GAME OVER!";
    }

     ?>
  




</body>
</html>