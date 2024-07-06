<?php
        try
        {
         $bdd = new PDO('mysql:host=localhost:8889;dbname=portfolio-test','root','root');
        }
        catch (Exception $e)
        {die('Erreur : ' . $e->getMessage());
        }

?>