<?php

if(isset($_GET['batiment']) && isset($_GET['salle'])) {
    echo "nous sommes dans le bâtiment " . $_GET['batiment'] . "salle numero ". $_GET['salle'] ;
}

