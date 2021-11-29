<?php
   include('idcom.php');

   if(isset($_GET['id']) && !empty($_GET['id'])){
       $getid = $_GET['id'];
       $recuArticle = $idcom->prepare('SELECT * FROM producteurs WHERE id=?');
       $recuArticle->execute(array($getid));
       if($recuArticle->rowCount() > 0){

        $deleteArticle = $idcom->prepare('DELETE FROM producteurs WHERE id = ?');
        $deleteArticle->execute(array($getid));
        header('location:productmodif.php');

       }else {
           echo "Aucun article trouvé";
       }

   }else{
       echo "Pas d'identifiant";
   }
?>