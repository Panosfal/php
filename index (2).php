<!DOCTYPE html>
<html>
<body>
<h1>This is from html</h1>
<?php
    require "Pokemon.php";

    $pikachu = new Pokemon('Pikachu', 6);
    
    $eevee = new Pokemon('Eevee', 4, 30);

    $pikachu->printInfo();
    $eevee->printInfo();

    echo "<hr/>";

    $pikachu->attack($eevee);

    $pikachu->printInfo();
    $eevee->printInfo();

    echo "<hr/>";

    $eevee->attack($pikachu);

    $pikachu->printInfo();
    $eevee->printInfo();

    echo "<hr/>";
?>
</body>
</html>
