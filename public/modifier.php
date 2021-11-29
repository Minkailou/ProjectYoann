<?php
 include('idcom.php');
 if(isset($_GET['id']) && !empty($_GET['id'])){
     $getid=$_GET['id'];
     $recuArticle=$idcom->prepare('SELECT * FROM fruta WHERE id = ?');
     $recuArticle->execute(array($getid));

     if($recuArticle->rowCount() > 0){
         $articleInfo = $recuArticle->fetch();
         $img = $articleInfo['img'];
         $titre = $articleInfo['titre'];
         $descrip_tion = $articleInfo['descrip_tion'];
         $date_pub = $articleInfo['date_pub'];
        if(isset($_POST['valider'])){

        $img_saisi = htmlspecialchars($_POST['img']);
         $titre_saisi = htmlspecialchars($_POST['titre']);
         $descrip_tion_saisi = nl2br(htmlspecialchars($_POST['descrip_tion']));
         $date_pub_saisi = htmlspecialchars($_POST['date_pub']);

         $updateArticle = $idcom->prepare('UPDATE fruta SET img = ?, titre = ?, descrip_tion = ?, date_pub = ?
         WHERE id = ?');
         $updateArticle->execute(array($img_saisi, $titre_saisi, $descrip_tion_saisi, $date_pub_saisi, $getid));

          header('location:articlemodif.php');
        }
         


     }else{
         echo"Aucun article trouvé";
     }

 }else{
     echo"Aucun identiant trouvé";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo6.webp">
     <link rel="stylesheet" href="output.css" >
    <title>Page de modification</title>
</head>
<body>
    
      <form action="#" method="POST" enctype="application/x-www-form-urlencoded">
      <section class="w-full text-gray-900 py-36 bg-center bg-cover bg-no-repeat"
    style="background-color:#ED9A1D">
    <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4 flex items-center justify-center">
        <div class="lg:w-3/6 lg:pr-0 pr-0">
            <h1 class="font-medium md:text-5xl text-black">Bienvenue sur la page d'ajout d'article</h1>
            <p class="leading-relaxed mt-4 text-black">
            Cette page est reservée pour ajouter vos articles sur votre site</p>
        </div>
        
        <div class="lg:w-3/6 xl:w-2/5 md:w-full sm:full bg-gray-50 p-8 flex flex-col lg:ml-auto w-full mt-10 lg:mt-0 rounded-md">
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600" >Images</label>
                <input type="file" placeholder="Votre image" accept="image/gif, image/jpeg, 
                           image/png, image/svg" name="img" value="<?= $img; ?>" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="Titre" class="leading-7 text-sm text-gray-600" >Titre</label>
                <input type="text" placeholder="Votre titre" name="titre" value="<?= $titre; ?>" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="Date" class="leading-7 text-sm text-gray-600" value="<?= $date_pub; ?>">Date de publication</label>
                <input  type="date" placeholder="Date de publication" name="date_pub" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="description" class="leading-7 text-sm text-gray-600">Description</label>
                <textarea type="text" placeholder="Votre description" name="descrip_tion" rows="4" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out">
                <?= $descrip_tion; ?>
            </textarea>
            </div>
            <button input type="submit"  name="valider" class="text-white bg-indigo-500 rounded-md border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 text-lg">Submit</button>
        </div>
    </div>
</section>
     <script>
         if(window.history.replaceState){
             window.history.replaceState(null, null, window.location.href);
         }
     </script>
    
</body>
</html>
<?php
   include('footer.php');
?>