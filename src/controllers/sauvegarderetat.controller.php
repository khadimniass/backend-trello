<?php
        // var_dump('dans controller');die;

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if(isset($_REQUEST['action']))
    {
        if($_REQUEST['action'] == 'sauvegarder')
        {
            $etat = json_decode(file_get_contents('php://input'),true); /* provide on front */
            save_data('etat', $etat);
        }
    }
}else if($_SERVER['REQUEST_METHOD'] == "GET")
{
    if(isset($_REQUEST['action']))
    {
        if($_REQUEST['action'] == 'sauvegarder')
        {
            echo "dans le controller";
        }   
    }
}