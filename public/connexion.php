<?php
ob_start();
  session_start();
  include('header.php');
  include('idcom.php');

  if(isset($_POST['valider'])){
      if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){

        $pseudo_par_def = "Yoann";
        $mdp_par_def = "mickey3D";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_def && $mdp_saisi == $mdp_par_def){
            $_SESSION['mdp'] = $mdp_saisi;
            header('location:espace-admin.php');
          

        }else{
            echo "Votre pseudo ou mot de passe n'est pas correct";
        }


    

      }else{
          echo "Veillez completez tous les champs..";
      }
      
  }
 
?>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<div class="container max-w-full mx-auto py-24 px-6">
  <div class="font-sans">
  <div class="max-w-sm mx-auto px-6">
    <div class="relative flex flex-wrap">
      <div class="w-full relative">
        <div class="mt-6">
           <div class="mb-5 pb-1border-b-2 text-center font-base text-gray-700">
           <span>By <a class="text-gray-800" href="https://twitter.com/framansi">@Minka</a></span>
          </div>
          <div class="text-center font-semibold text-black">
           Espace admin Biofruta
          </div>
         
          <form class="mt-8" action="#" method="POST" enctype="application/x-www-form-urlencoded">
            <div class="mx-auto max-w-lg">
              <div class="py-2">
                <span class="px-1 text-sm text-gray-600">Pseudo</span>
                <input placeholder="Votre pseudo" type="text" name="pseudo" required pattern="^[A-Za-z '-]+$" maxlength="20"
                  class="text-md block px-3 py-2  rounded-lg w-full 
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-400  focus:bg-white focus:border-gray-600 focus:outline-none">
              </div>
              <div class="py-2" x-data="{ show: true }">
                <span class="px-1 text-sm text-gray-600">Password</span>
                <div class="relative">
                  <input placeholder="" type="password" name="mdp" class="text-md block px-3 py-2 rounded-lg w-full 
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                focus:placeholder-gray-500
                focus:bg-white 
                focus:border-gray-600  
                focus:outline-none">
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                  </div>
                </div>
              </div>
             
               <button type="submit" name="valider"class="mt-3 text-lg font-semibold 
                bg-gray-800 w-full text-white rounded-lg
                px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                Login
              </button>
            </div>
          </form>
       
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php
ob_end_flush();
 include('footer.php');
?>