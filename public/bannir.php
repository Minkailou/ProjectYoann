<?php
  session_start();
  include('idcom.php');
  if(isset($_GET['id']) && !empty($_GET['id'])){
      $getid = $_GET['id'];

    $recupUser = $idcom->prepare('SELECT * FROM contacts WHERE id=?');
    $recupUser->execute(array($getid));

    if($recupUser->rowCount() > 0){

        $bannirUser = $idcom->prepare('DELETE FROM contacts WHERE id=?');
        $bannirUser->execute(array($getid));

        header('location:recup-contact.php');

    }else{
        echo "Aucun contact trouvé";
    }

  }else{
      echo "Aucun identifiant trouvé";
  }
?>