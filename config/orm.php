<?php
//json to array
function find_data(string $key){
    return file_get_contents(PATH_DB);
}
//array to json
function save_data(string $key,array $etat)
{
    $data_json=file_get_contents(PATH_DB); //récupérer tous les donnees du fichier json
    $data_decoded=json_decode($data_json,true); //traduire en array
    $data_decoded[$key][]=$etat;
    // $final=json_encode($data_decoded,false);
    $final=json_encode($data_decoded, JSON_PRETTY_PRINT);
    file_put_contents(PATH_DB,$final); 
}