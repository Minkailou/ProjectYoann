<?php
//   session_start();
//   if(!$_SESSION['mdp']){
//        header('location:connexion.php');
//   }
  include('header.php');
  include('idcom.php');

?>

<div class="holder mx-auto h-auto mt-20 w-10/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-1">



<?php

  $req=$idcom->prepare('SELECT * FROM fruta WHERE id = :id');
  $req->bindParam(':id', $_GET["id"]);
  $req->execute();

  $result = $req->fetch(PDO::FETCH_ASSOC);

        
?>
   <div class="each mb-10 m-2 shadow-xl overflow-hidden sm:h-auto border-gray-200 bg-gray-100 relative">
        <img class="w-full h-1/2" src='./img/<?=$result ['img'];?>' />
        <div class="desc p-4 text-gray-800">
          <a href="#" target="_new" class="title font-bold block cursor-pointer hover:underline"><?=$result['titre'];?></a>
          <span class="description text-sm block py-2 border-gray-400 mb-2"><?=$result['descrip_tion'];?></span>
          <span class="description text-sm block py-2 border-gray-400 mb-2"><?=$result['date_pub'];?></span>
        </div>
      </div>
 <?php 

      $req->closeCursor();

?>
</div>

<?php
 include('footer.php');
?>

   