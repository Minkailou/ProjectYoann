<?php
 
   session_start();
   if(!$_SESSION['mdp']){
    header('location:connexion.php');

   }

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo6.webp" />
    <link rel="stylesheet" href="output.css" />
    <title>Espace-admin</title>
</head>
<body>
    <div class="inline-flex items-center m-8 bg-yelow leading-none text-black rounded-full p-2 shadow text-teal text-sm">
      <span class="inline-flex bg-vertu-200 text-black rounded-full h-6 px-3 justify-center items-center hover:bg-white "><a href="recup-contact.php">Voir</a></span>
      <span class="inline-flex px-2">Contact</span>
    </div>
  </div>

  <div class="inline-flex items-center m-8 bg-vertu-200 leading-none text-black rounded-full p-2 shadow text-teal text-sm">
      <span class="inline-flex bg-yelow text-black rounded-full h-6 px-3 justify-center items-center hover:bg-blue-300"><a href="insertion.php">Voir</a></span>
      <span class="inline-flex px-2">Nouveaux articles</span>
    </div>
  </div>

  <div class="inline-flex items-center m-8 bg-yellow-200 leading-none text-black rounded-full p-2 shadow text-teal text-sm">
      <span class="inline-flex bg-yellow-800 text-black rounded-full h-6 px-3 justify-center items-center hover:bg-gray-700 hover:text-gray-50"><a href="inserer-product.php">Voir</a></span>
      <span class="inline-flex px-2">Ajout producteurs</span>
    </div>
	<div class="inline-flex items-center m-8 bg-red-800 leading-none text-white rounded-full p-2 shadow text-teal text-sm">
      <span class="inline-flex bg-black text-white rounded-full h-6 px-3 justify-center items-center hover:bg-white hover:text-black"><a href="articlemodif.php">Voir</a></span>
      <span class="inline-flex px-2">Modif et Suppr articles</span>
    </div>
	<div class="inline-flex items-center m-8 bg-purple-800 leading-none text-white rounded-full p-2 shadow text-teal text-sm">
      <span class="inline-flex bg-purple-500 text-white rounded-full h-6 px-3 justify-center items-center hover:bg-gray-200 hover:text-gray-800"><a href="productmodif.php">Voir</a></span>
      <span class="inline-flex px-2">Modif et Suppr producteurs</span>
    </div>

  </div>
   
</body>
</html>