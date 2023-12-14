<?php

    if (isset($_POST["temperature"])) {
        if ($_POST["temperature"] <= 0 ) {
            echo"Ice";
        }
        else if ($_POST["temperature"] > 0 && $_POST["temperature"] < 100){
            echo "liquid";
        } else {
            echo "steam";
        }
    } else {
        echo "You sneaky lil' rascal..";
    }