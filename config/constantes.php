<?php
define('ROOT',str_replace("public".DIRECTORY_SEPARATOR."index.php",'',$_SERVER['SCRIPT_FILENAME']));

define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);

define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");

define("WEB_ROOT",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));

