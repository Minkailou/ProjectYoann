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
    <title>Recup Contact</title>
</head>
<body class="bg-yelow">
<nav class="relative px-4 py-4 flex justify-between items-center bg-yelow">
		<a class="text-2xl font-mono leading-none" href="index.php">
			<img src="img/yoann-anim-final.svg" alt="logo" class="h-14 ml-5">
        Biofruta
		</a>
		<div class="lg:hidden ">
			<button class="navbar-burger flex items-center text-black p-3">
				<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
		<ul class="hidden absolute top-1/2 right-1/4 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
			<li><a class="text-lg text-black font-bold hover:text-white" href="index.php">Accueil</a></li>
			<li><a class="text-lg text-black font-bold hover:text-white" href="produit.php">Fruits & Producteurs</a></li>
			<li><a class="text-lg text-black font-bold hover:text-white" href="contact.php">Contact</a></li>
		</ul>

		<li class="list-none"><a class=" text-lg text-black font-bold hover:text-white" href="connexion.php">Admin</a></li>
		
	</nav>
	<div class="navbar-menu relative z-50 hidden">
		<div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-2xl font-mono leading-none" href="#">
					<img src="img/yoann-anim-final.svg" class="h-14 ml-5">
                    Biofruta
				</a>
				<button class="navbar-close">
					<svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-yelow hover:text-black rounded" href="index.php">Accueil</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-yelow hover:text-black rounded" href="produit.php">Fruits & Producteurs</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-yelow hover:text-black rounded" href="contact.php">Contact</a>
					</li>
					
				</ul>
			</div>
			
			</div>
		</nav>
<?php
include('idcom.php');
?>
<table class="min-w-full border-collapse block md:table">
		<thead class="block md:table-header-group">
        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
				<th class="bg-vertu-200 p-2 text-black font-bold md:border md:border-black text-left block md:table-cell">Nom</th>
				<th class="bg-vertu-200 p-2 text-black font-bold md:border md:border-black text-left block md:table-cell">Phone</th>
				<th class="bg-vertu-200 p-2 text-black font-bold md:border md:border-black text-left block md:table-cell">Mail</th>
				<th class="bg-vertu-200 p-2 text-black font-bold md:border md:border-black text-left block md:table-cell">message</th>
				<th class="bg-vertu-200 p-2 text-black font-bold md:border md:border-black
                 text-left block md:table-cell">Actions</th>
			</tr>
		</thead>

<?php


    $recupArticle=$idcom->query('SELECT * FROM contacts');
    while($article = $recupArticle->fetch()){
    
  
?>
<!-- component -->

		
		<tbody class="block md:table-row-group">
			<tr class="bg-white  border border-grey-500 md:border-none block md:table-row">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span><?=$article['nom'];?></td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">User Name</span><?=$article['phone'];?></td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email Address</span><?=$article['mail'];?></td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Mobile</span><?=$article['messager'];?></td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
					<span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
					<!-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button> -->
					<button class="bg-yelow hover:bg-vertu-200 text-black font-bold py-1 px-2 border border-vertu-200 rounded"><a href="bannir.php?id=<?= $article['id']; ?>">Delete</button>
				</td>
			</tr>
			
	
<?php 
				
                

}


?>
</tbody>
 </table>   