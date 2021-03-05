<?php
try
{

$bd = new PDO('mysql:host=10.0.0.5;dbname=construction;charset=utf8', 'Wisp', 'Arches2018$');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM clients');

?>