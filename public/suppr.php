<?php
   include('idcom.php');

   if(isset($_GET['id']) && !empty($_GET['id'])){
       $getid = $_GET['id'];
       $recuArticle = $idcom->prepare('SELECT * FROM fruta WHERE id=?');
       $recuArticle->execute(array($getid));
       if($recuArticle->rowCount() > 0){

        $deleteArticle = $idcom->prepare('DELETE FROM fruta WHERE id = ?');
        $deleteArticle->execute(array($getid));
        header('location:articlemodif.php');

       }else {
           echo "Aucun article trouvé";
       }

   }else{
       echo "Pas d'identifiant";
   }
?>