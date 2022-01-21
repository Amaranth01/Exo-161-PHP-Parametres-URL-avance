<?php
if(isset($_GET['nom']) && isset($_GET['prenom'])) {
    echo "Le paramètre " . $_GET['nom'] . " existe et " . $_GET['prenom'] . " aussi";
}