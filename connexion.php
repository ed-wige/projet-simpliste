<?php
    try{
        $db=new PDO('mysql:host=localhost; dbname=simplon', 'root', '');
    
    }
    catch (PDOException $e){
        die('Erreur: ' .$e->getMessage());
    }

?>