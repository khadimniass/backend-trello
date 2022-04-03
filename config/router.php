<?php
if (isset($_REQUEST['controller'])) {
    switch ($_REQUEST['controller']) {
        case 'etat':
            require_once(PATH_SRC."controllers".DIRECTORY_SEPARATOR."sauvegarderetat.controllers.php");
            break;
    }
}