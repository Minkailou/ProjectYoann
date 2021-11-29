<?php
  ob_start();
  include_once('idcom.php');
  include_once('header.php');
  

   if(isset($_POST['envoyer'])){
    
    if(!empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['phone']) && !empty($_POST['messager'])){
      $nom = htmlspecialchars($_POST['nom']);
      $mail = htmlspecialchars($_POST['mail']);
      $phone = htmlspecialchars($_POST['phone']);
      $messager = htmlspecialchars($_POST['messager']);

      $requete=$idcom->prepare("INSERT INTO contacts (nom, mail, phone, messager) VALUES(?, ?, ?, ?)");
      $requete->execute(array($nom, $mail, $phone, $messager));  
      
      echo "<script type=\"text/javascript\">
      alert('Merci, votre message a bien été envoyé. Nous vous revenons bientôt...');
    

      </script>";

    }
    else {
     echo "<script type=\"text/javascript\">
      alert('Veillez remplir tous les champs...')</script>";
 }
}
?>
  <!-- component -->

  <div class="heading text-center font-bold text-3xl md:text-4xl lg:text-5xl m-5 text-black">Laissez-nous vos messages</div>
 
  <form action="#" method="POST" enctype="application/x-www-form-urlencoded">
      <section class="w-full  text-gray-900 py-36 bg-center bg-cover bg-no-repeat"
      style="background:url('img/contact 1.svg')no-repeat">
        
        <div class="lg:w-3/6 xl:w-2/5 md:w-full sm:full bg-gray-50 p-8 flex flex-col lg:ml-auto w-full mt-10 mr-4 lg:mt-0 rounded-md">
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600">Nom</label>
                <input type="text" placeholder=" Votre nom " name="nom" required pattern="^[A-Za-z '-]+$" maxlength="21" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" placeholder="Votre email" name="mail" required pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="tel" class="leading-7 text-sm text-gray-600">Téléphone</label>
                <input  type="tel" placeholder="123-456-7890" name="phone"  pattern="[0-9]{13}"
       required  class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="messager" class="leading-7 text-sm text-gray-600">Description</label>
                <textarea type="text" placeholder="Votre message" name="messager" rows="4" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out"> </textarea>
            </div>
            <button input type="submit"  name="envoyer" class="text-white bg-indigo-500 rounded-md border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 text-lg">Submit</button>
        </div>
    </div>
    
</section>
     <script>
         if(window.history.replaceState){
             window.history.replaceState(null, null, window.location.href);
         }
     </script>
<?php
include('footer.php');
if(isset($erreur)){
    echo '<font color="red">'.$erreur."</font>";
}
ob_end_flush();
?>

