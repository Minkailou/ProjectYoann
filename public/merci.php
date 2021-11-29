<?php

   session_start();  
   if(!$_SESSION['mdp']){
    header('location:connexion.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="output.css" />
    <title>Document</title>
</head>
<body>

<!-- component -->
<div class="flex justify-center items-center w-screen h-screen bg-gray-800">
	<!-- COMPONENT CODE -->
	<div class="container mx-auto mt-10 mb-10 lg:mb-40 lg:px-20">
		<div class="relative w-full my-4 lg:w-9/12 mr-auto rounded-2xl ">
			<img alt="Card" src="img/biofruta.svg" class="max-w-full  "/>
        </div>
		<div class="relative w-full lg:-mt-96 lg:w-3/6 p-6 ml-auto bg-blue-200 rounded-2xl z-50">
		    <div class="flex flex-col text-black">
				
                <p class="text-black my-5  px-2">
                    Merci pour votre aimable message, nous vous reviendrons bientôt. Si vous voulez revenir sur le site cliquez sur le lien ci-dessous.
                </p>
                <div class="flex justify-between pl-2">
                    <h3 class="font-bold text-2xl"><a href="index.php">Page d'acceil</a></h3>
                    <!-- <i class="fas fa-quote-right text-2xl" /> -->
                </div>
            </div>
        </div>
    </div>
    <!-- COMPONENT CODE -->
</div>

<!-- BUY ME A PIZZA AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
<!-- <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
	<div>
		<a title="Buy me a pizza" href="https://www.buymeacoffee.com/Dekartmc" target="_blank"
			class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
			<img class="object-cover object-center w-full h-full rounded-full" src="https://img.icons8.com/emoji/48/000000/pizza-emoji.png"/>
    </a>
	</div>
</div> -->

    <script type="text/javascript">
      alert('Votre message a bien été envoyé...');
    //    if(window.history.replaceState){
    //          window.history.replaceState(null, null, window.location.href);
    //      }


      </script>


</body>
</html>

<?php
 ob_end_flush();
?>