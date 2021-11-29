

<!-- component -->
<div>
  <footer class="text-gray-600 body-font bg-yelow">
    <div class="container px-5 py- mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
        <a href="index.php" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <img src="img/yoann-anim-final.svg" alt="logo" class="h-10 mr-1">
          <span class="ml-3 text-xl text-white">Biofruta</span>
        </a>
        <p class="mt-2 text-sm text-white">Vente de fruits bio d'Andalousie </p>
      </div>
      <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          
          <nav class="list-none mb-10">
            <li>
              <a class="text-white hover:text-red-300" href="#">First Link</a>
            </li>
          </nav>
          </div>
        
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <nav class="list-none mb-10">
            <li>
              <a class="text-white hover:text-red-300" href="#">First Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <nav class="list-none mb-10">
            <li>
              <a href="connexion.php"><img src="img/pomme1.svg" alt="logo" class="h-14 ml-5 text-white"></a>
            </li>
            
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          
          <nav class="list-none mb-10">
            <li>
              <a class="text-white hover:text-red-300" href="#"><img src="./img/panier.svg"/></a>
            </li>
           
          </nav>
        </div>
      </div>
    </div>
    <div class="bg-black">
      <div class="container mx-auto py-1 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-white text-sm text-center sm:text-left">© Biofruta-2021
          <a href="http://winbodesign.com" rel="noopener noreferrer" class="text-gray-400 ml-1" target="_blank">@WinboDesign</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
          <a href="index.php"class="text-gray-200">
          <img src="img/face.svg" class="h-10 rounded-md" alt="bio"/>
          </a>
          <a href="#" class="ml-3 text-gray-200">
          <img src="img/insta.svg" class="h-10 rounded-md" alt="bio"/>
          </a>
          <a href="#" class="ml-3 text-gray-200">
          <img src="img/linkdin.svg" class="h-10 rounded-md" alt="bio"/>
          </a>
          <a href="#" class="ml-3 text-gray-200">
          <img src="img/you.svg" class="h-10 rounded-md" alt="bio"/>
          </a>
        </span>
      </div>
    </div>
  </footer>
</div>

<script src="typed.js"></script>
    <script>
  var typed = new Typed('.element', {
  // Waits 1000ms after typing "First"
  strings: [
    "Bienvenue sur le site de Biofruta", "Vente de fruits bio d'Andalousie en Auvergne :","agrumes, avocat, huile d'olive et autres fruits suivant la saison !",
"Vente de fruits bio d'Andalousie en Auvergne:agrumes,avocat, huile d'olive et autres fruits suivant la saison !Des producteurs qui respectent l'environnement, rémunération plus juste et des produits de qualité."],

    typeSpeed: 50,
    backSpeed: 10,
    smartBackspace: true,
});
</script>
<script>
  $(document).ready(function() {
  $(".nav-toggler").each(function(_, navToggler) {
    var target = $(navToggler).data("target");
    $(navToggler).on("click", function() {
      $(target).animate({
        height: "toggle"
      });
    });
  });
});

</script>
    
</body>
</html>