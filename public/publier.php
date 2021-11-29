<?php
//  session_start();
//  if(!$_SESSION['mdp']){
//       header('location:connexion.php');
//  }

include('idcom.php');


$annoncesParPage = 12;
$annoncesTotalesReq = $idcom->query('SELECT id FROM fruta');
$annoncesTotales = $annoncesTotalesReq->rowCount();
$pageTotales = ceil($annoncesTotales / $annoncesParPage);

if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $pageTotales){
  
    $_GET['page'] = intval($_GET['page']);
    $pageCourante = $_GET['page'];

    


}else {
    $pageCourante = 1;
}

$depart = ($pageCourante - 1) * $annoncesParPage;
?>

   <!-- <div class="heading text-center font-bold text-3xl md:text-4xl lg:text-5xl m-5 text-black">Nos articles récents</div> -->

   <div class="holder mx-auto h-auto mt-20 w-10/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3">
 
<?php
    $recupArticle=$idcom->query('SELECT * FROM fruta ORDER BY id DESC LIMIT '.$depart.','.$annoncesParPage);
    while($article = $recupArticle->fetch()){

     


      

 ?>   
    
      <div class="each mb-10 m-2 shadow-xl overflow-hidden sm:h-auto border-gray-200 bg-gray-100 relative">
        <img class="w-full h-1/2" src='./img/<?=$article['img'];?>' />
        <div class="desc p-4 text-gray-800">
          <a href="pagePrincipaleArticle.php?id=<?=$article['id'];?>" target="_new" class="title font-bold block cursor-pointer hover:underline"><?=$article['titre'];?></a>
          <span class="description text-sm block py-2 border-gray-400 mb-2"><?=$article['descrip_tion'];?></span>
          <span class="description text-sm block py-2 border-gray-400 mb-2"><?=$article['date_pub'];?></span>
          <button class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Lire la suite</button>
        </div>
      </div>
   <?php 
   

    }
    $recupArticle->closeCursor();

    ?>
    </div>
    <?php
    ob_end_flush();

          echo"<link href='output.css' rel='stylesheet'>";
          for($i=1;$i<= $pageTotales;$i++){
          if($i == $pageCourante){
          echo $i.' ';

    }else{
        echo '<a class="lien" href="index.php?page='.$i.'">'.$i.'</a>';
    }
         
        
        
    }
?>

