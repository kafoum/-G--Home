<?php

try {
    $access=new pdo("mysql:host=localhost;port=4306;dbname=house;charset=utf8","root");

    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e)
{
    echo "Erreur de connexion : " . $e->getMessage();
}
?>