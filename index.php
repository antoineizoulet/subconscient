<?php
if(!empty($_POST)) {
    extract($_POST);
    $valid = true;
    if(empty($nom)) {
        $valid=false;
        $erreurnom="Vous n'avez pas rempli 
		
		votre nom";
    }
    
    if(!preg_match("/^[a-z 0-9\-_.]+@[a-z 0-9\-_.]+\.[a-z]{2,3}$/i",$email)) {
        $valid=false;
        $erreuremail="Votre email n'est pas valide";
    }
    
    
     if(empty($email)) {
        $valid=false;
        $erreuremail="Vous n'avez pas rempli votre email";
    }
    
      if(empty($message)) {
        $valid=false;
        $erreurmessage="Vous n'avez pas rempli votre message";
    }
    
    if($valid) {
        $to = "contact@subconscientband.fr";
        $subject = 'Subconscient';
        $message = $_POST['message'];
        $header = 'From:';
        mail($to, $subject, $message, $header);
        
        if (mail($to,$sujet,$message,$header)) {
            $erreur = "Votre message nous ai bien parvenu";
            unset ($nom);
            unset($email);
            unset($message);
        }
        
        else {
            $erreur = "Une erreur est survenue et votre mail n'est pas partie";
        
        }
    }
}  
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Subconscient</title>
    <meta name="viewport" content="width=device-width">
    <meta property="og:description" content="Subconscient Groupe Musical Palois">
    <meta property="og:image" content="http://www.subconscientband.fr/img/vignette.jpg">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/slimbox2.js"></script>
</head>
<body>


<!-- Mise en route like facebook -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5&appId=386196941577144";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="conteneur">

<!-- Logo -->

<a href="index.php"><img src="img/logo.png" id="logo"></a>


<!-- Menu -->
    
      
    <ul>
        <li class="lien">Présentation</li>
        <li class="lien2" >Photos</li>
        <li class="lien3">Discographie</li>
        <li class="lien4">Contact</li>
    </ul>

        
    <!-- Partie formulaire de contact -->
  
<div id="formulaire">
        <h1 id="titre">Contactez-nous !</h1>
        <?php
            if (isset ($erreur)) {echo "<p>$erreur</p>"; }
        ?>
    <form method="post" action="index.php">
        <label for="nom">Nom :</label> <br>
        <input type="text" name="nom" id="nom" value="<?php if(isset($nom)) echo $nom; ?>">
        <span class="error-message"><?php if(isset($erreurnom)) echo $erreurnom; ?></span>
        <br>
        
        <label for="email">Email :</label> <br>
        <input type="text" name="email" id="email" value="<?php if(isset($email)) echo $email; ?>">            
        <span class="error-message"><?php if(isset($erreuremail)) echo $erreuremail; ?></span>

        <label for="message" id="titremessage">Votre message :</label> 
        <textarea name="message"  id="message" value="<?php if(isset($message)) echo $message; ?>"></textarea>                        <span class="error-message"><?php if(isset($erreurmessage)) echo $erreurmessage; ?></span>

        <input type="submit" value="Envoyer" id="envoyer"> 
    </form>
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2903.5782994753995!2d-0.4008632345354423!3d43.302152133077556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sampli+pau!5e0!3m2!1sfr!2sfr!4v1448114300933" width="300" height="251" frameborder="0" style="border:0" allowfullscreen id="carte"></iframe>

</div>
        

      
      <!-- Partie discographie --> 

 <div id="discographie">
     <p id="textealbum">
       <iframe style="border: 0; width: 200px; height: 200px;" id="player" src="https://bandcamp.com/EmbeddedPlayer/album=347617203/size=large/bgcol=333333/linkcol=4ec5ec/minimal=true/transparent=true/" seamless><a href="http://subconscient.bandcamp.com/album/subconscient">Subconscient by Subconscient</a></iframe>
        Cet album démontre le travail et l'évolution du groupe dans le travail et le temps. 
Il aborde des sonorités plus electroniques soutenue d'une basse (orgue). Le piano est toujours présent sur le nouvel opus mais il est abordé d'une manière différente, il est plus ou moins en retrait par rapport a Whales Chant. Ce nouvel album reflète l'instant présent d'un passé méconnu. Du post rock au trip hop il mixe un grand nombre d'idées survenues au fil des mois de préparation.
     </p>
     
  <p id="waleschant">
    <iframe style="border: 0; width: 200px; height: 200px;" id="player2" src="http://bandcamp.com/EmbeddedPlayer/album=1757743654/size=large/bgcol=333333/linkcol=4ec5ec/minimal=true/transparent=true/" seamless><a href="http://subconscient.bandcamp.com/album/whales-chant">Whales Chant by Subconscient</a></iframe>
    Whales Chant aborde un son vraiment brut ou la note vient toucher la batterie sur un rythme soutenu et haletant, le morceau est cousu de manière linéaire tout en jouant sur des rebondissements innatendus. Avec une premiere partie essentiellement composé de piano et de violoncelles.
      A noter une fin completement aéerienne et post rock melant deux guitares un clavier à effets et une batterie soutenue. <br> 
 </p>
   
       
</div>   
      
      
      <!-- Partie photos -->      

   
<div id="album">
    <a href="img/galerie/one_link.jpg" rel="lightbox" title="Concert à l'association Ampli de Pau"><img             src="img/galerie/one.jpg" id="one"></a>  
    <a href="img/galerie/two_link.jpg" rel="lightbox" title="Concert à l'association Ampli de Pau"><img             src="img/galerie/two.jpg" id="two"></a>
    <a href="img/galerie/seven_link.jpg" rel="lightbox" title="La chaine des Pyrénées"><img                         src="img/galerie/seven.jpg" id="eight"></a>
    <a href="img/galerie/three_link.jpg" rel="lightbox" title="Jean et Alex à Saint-Jean-De-Luz"><img               src="img/galerie/three.jpg" id="three"></a>  
    <a href="img/galerie/four_link.jpg" rel="lightbox" title="Wales Chant"><img src="img/galerie/four.jpg"         id="four"></a>  
    <!-- <a href="img/galerie/five_link.jpg" rel="lightbox" title="Jean et Alex"><img src="img/galerie/five.jpg" id="five"></a>--> 
    <a href="img/galerie/six_link.jpg" rel="lightbox" title="Grey Sky"><img src="img/galerie/six.jpg"               id="six"></a>
    <a href="img/galerie/sky_link.jpg" rel="lightbox" title="Blue Sky"><img src="img/galerie/sky.jpg"               id="seven"></a>
</div>  
      
 
       
    <!-- Partie présentation -->        
       
<div id="presentation">
        <p id="texte_presentation">
        <a href="img/albumone.jpg" rel="lightbox" title="Subconscient"><img src="img/albumone.jpg" width="150" height="150" id="band"></a>
          Mouvant comme les grands espaces qu'il dépeint, le duo Subconscient trace avec rigueur et sensibilité un décor dans lequel se croisent des fantômes, héros d'un passé violent, et des passions vindicatives. Chaque mouvement se fait libre et abstrait, pour l'esprit et son absence. A la lumière marine et à l'ombre de sa force, chaque souffle humain se fait murmure face à l'océan. Chaque histoire devient silence apaisé et mélancolique. Un silence respecté, lointain.
C'est dans l'introspection et l'improvisation que l'écriture cinématique de Subconscient donne vie à un romantisme post-rock plongeant au plus profond de l'âme humaine pour y explorer une mémoire tourmentée. Dans la puissance de la composition et la retenue du corps. Puis dans la retenue de la note et la puissance de la frappe. Entre colère refoulée et souvenirs sublimés. Entre onirisme tempétueux et calme lumineux.
        </p>
</div>
     
     
       
    </div> 
        

<!-- Script de l'ouverture et fermeture des différentes pages -->
    
<script>
     
    
    $( ".lien" ).click(function() {
        $( "#presentation" ).toggle( "blind", 1000 );
    });
  
    $( ".lien2" ).click(function() {
        $( "#presentation" ).toggle( "blind", 1000 );
    });
    
    $( ".lien3" ).click(function() {
        $( "#album" ).toggle( "blind", 1000 );
    });
    
    $( ".lien4" ).click(function() {
        $( "#discographie" ).toggle( "blind", 1000 );
    });
    

</script>


<script type="text/javascript">
    $function() {
      $("#envoyer").click(function(){
        valid=true;
         if($("#nom").val()==""){               
             $("#nom").css("border-color", "#FF0000");            
             $("#nom").next(".error-message").text("Veuillez entrer un nom");
             valid=false;            
      } 
         else {
                $("#nom").css("border-color", "#00FF00");            
                $("#nom").next(".error-message").text("");
         }
          
        if($("#email").val()==""){               
             $("#email").css("border-color", "#FF0000");            
             $("#email").next(".error-message").text("Veuillez entrer un email valide");
             valid=false;            
      } 
         else {
            if(!$("#email")).val().match("/^[a-z 0-9\-_.]+@[a-z 0-9\-_.]+\.[a-z]{2,3}$/i")){
            $("#email").css("border-color", "#00FF00");            
            $("#email").next(".error-message").text("Veuillez entrer un email valide");
            
            }
             
            else {
                $("#email").css("border-color", "#00FF00");            
                $("#email").next(".error-message").text("");
            }
         
         
             if($("#message").val()==""){               
                $("#message").css("border-color", "#FF0000");            
                $("#message").next(".error-message").text("Veuillez entrer un message");
             valid=false;            
      } 
            else {
                $("#message").css("border-color", "#00FF00");            
                $("#message").next(".error-message").text("");
            }
         }
          
          return valid;
             
    });
});   
    
    
</script>



<footer>

<div class="fb-page" data-href="https://www.facebook.com/Subconscient-215038618679111/?fref=ts" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"></div>
   
<p id="copyright">© Copyright 2015 - <a href="http://antoine-izoulet.com/" target="_blank" id="site">Antoine Izoulet</a> - Tous droits Réservés</p> 
    
</footer>


</body>
</html>