<?php
if(isset($_GET['langage']) && isset($_GET['serveur'])) {
    echo "Le language est " . $_GET['langage'] . "et le serveur " . $_GET['serveur'];
}
