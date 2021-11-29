<?php
   
   $servername = "localhost";
   $username = "root";
   $password = "";

   try {
        $idcom = new PDO("mysql:host=$servername;dbname=andalousie", $username, $password);
        $idcom ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         echo "Vous êtes bien connecté à la bdd";
   }

   catch(PDOException $e){
       echo "Error de connexion à la bdd". $e->getMessage();
   }

 
?>