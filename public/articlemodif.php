<?php
if(!isset($_SESSION)){
  
session_start();
include('idcom.php');
include('header.php');
if(!$_SESSION['mdp']){
  header('location:connexion.php');

 }
}

?>

   <div class="heading text-center font-bold text-3xl md:text-4xl lg:text-5xl m-5 text-black">Modifier et Supprimer</div>

   <div class="holder mx-auto w-10/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3">
 
<?php
    $recupArticle=$idcom->query('SELECT * FROM fruta');
    while($article = $recupArticle->fetch()){


      

 ?>   
    
      <div class="each mb-10 m-2 shadow-xl border-gray-800 bg-gray-100 relative">
        <img class="w-full h-1/2" src='./img/<?=$article['img'];?>' />
        <div class="desc p-4 text-gray-800">
          <a href="https://www.youtube.com/watch?v=dvqT-E74Qlo" target="_new" class="title font-bold block cursor-pointer hover:underline"><?=$article['titre'];?></a>
          <span class="description text-sm block py-2 border-gray-400 mb-2"><?=$article['descrip_tion'];?></span>
          <span class="description text-sm block py-2 border-gray-400 mb-2"><?=$article['date_pub'];?></span>
          <a href="suppr.php?id=<?= $article['id'];?>">
          <button class="p-2 pl-5 pr-5 bg-red-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Supprimer</button>
         </a>
         <a href="modifier.php?id=<?= $article['id'];?>">
          <button class="p-2 pl-5 pr-5 bg-green-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Modifier</button>
         </a>
        </div>
      </div>
   <?php 

    }
   
    ?>
    </div>
    


