<?php
//    session_start();
//    if(!$_SESSION['mdp']){
//         header('location:connexion.php');
//    }
   include('header.php');
   include('idcom.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <!-- <div class="slider-wrapper">
        <ul class="slider">
            <li class="slide"><img src="img/agri.jpg" alt="frutas"/></li>
            <li class="slide"><img src="img/frutas3.jpg" alt="frutas"/></li>
            <li class="slide"><img src="img/frutas4.jpg" alt="frutas"/></li>
            <li class="slide"><img src="img/frutas5.jpg" alt="frutas"/></li>
            <li class="slide"><img src="img/frutas6.jpg" alt="frutas"/></li>
        </ul>
    </div>
    
</body> -->
</html>


<?php


   $annoncesParPage = 4;
   $annoncesTotalesReq = $idcom->query('SELECT id FROM producteurs');
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

<section class="  max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="text-center pb-12 bg-white">
    <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-black">
            Nos Producteurs
    </h1>
    </div>   
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6  bg-white">

   
 
<?php
    $recupArticle=$idcom->query('SELECT * FROM producteurs ORDER BY id DESC LIMIT '.$depart.','.$annoncesParPage);
    while($article = $recupArticle->fetch()){

?>


      
    
        <div class="w-full bg-gray-100 rounded-lg sahdow-lg overflow-hidden flex flex-col md:flex-row">
        <div class="w-full md:w-2/5 h-80">
        <img class="object-center object-cover w-full h-full" src='./img/<?=$article['photo'];?>' />
        </div>
          <div class="w-full md:w-3/5 text-left p-6 md:p-4 space-y-2">
             <p class="text-xl text-gray-700 font-bold"><?=$article['nom'];?></p>
              <p class="text-base text-gray-400 font-normal"><?=$article['metier'];?></p>
                 <p class="text-base leading-relaxed text-gray-500 font-normal"><?=$article['details'];?></p>

            </div>
        </div>
        <?php 

}
$recupArticle->closeCursor();

?>
       
</div>
</section>
<?php
          echo"<link href='output.css' rel='stylesheet'>";
          for($i=1;$i<= $pageTotales;$i++){
          if($i == $pageCourante){
          echo $i.' ';

    }else{
        echo '<a class="lien" href="produit.php?page='.$i.'">'.$i.'</a>';
    }
         
        
        
    }
?>

<?php
   include('footer.php');

?>
