<?php
if(isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
    echo "la date de début est le " . $_GET['dateDebut'] . "celle de la fin " . $_GET['dateFin'];
}