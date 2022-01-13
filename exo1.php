<?php

if (isset($_GET["param"]) && isset($_GET["value"])) {
    $param1 = $_GET["param"];
    $param2 = $_GET["value"];
    echo "Les clés 'param' & 'value' sont bien présentes" . "<br>";
}
else {
    echo "Les clés ne sont pas correctes" . "<br>";
}

for ($i = 0; $i <= 10; $i++) {
    echo "Hello World ! " . $_GET["param"] .  "<br>";
}


