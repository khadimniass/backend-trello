<?php
if (isset($_REQUEST['controller'])) {
    if ($_REQUEST['controller'] == 'etat') {
        require_once(PATH_SRC . "controllers" . DIRECTORY_SEPARATOR . "sauvegarderetat.controller.php");
    }
}

