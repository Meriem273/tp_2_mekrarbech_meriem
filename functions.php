<?php
function validationNumber($num_addresses){
    $num_addresses = $_POST["num_addresses"];
    if (empty($num_addresses)) {
        return "C'est vide ! Entrez une valeur";
    }
    foreach ($num_addresses as $element) {
        if (is_numeric($element) && $element > 0) {
            echo  "C'est valide";
        } else {
            echo "Ce n'est pas valide";
        }
    }
    }
?>