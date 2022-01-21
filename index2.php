<?php

if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['age'])) {
    echo "Le paramètre " . $_GET['nom'] . " existe et " . $_GET['prenom'] . $_GET['age'] . " aussi";
}
else {
    echo "Le paramètre age n'existe pas";
}