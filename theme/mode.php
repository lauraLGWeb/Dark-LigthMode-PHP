<?php
if(isset($_POST["submit"])){
   $themeSelected = $_POST["theme"];
   if($themeSelected === "light"){
    setcookie("theme", $themeSelected, time() + 365 * 24 * 3600);
    header("Location:mode.php");exit;
   } else {
    setcookie("theme", $themeSelected, time() + 365 * 24 * 3600);
     header("Location:mode.php");exit;
   }    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php 
    if(isset($_COOKIE["theme"]) && $_COOKIE["theme"]=== "light"){
       echo '<link rel="stylesheet" href="light.css">';
    } else {
        echo '<link rel="stylesheet" href="dark.css">';
    }
    ?>
   
    <title>Document</title>
</head>
<body>
   
  <header class="site-header">
    
      <h1>Ma page de démonstration</h1>

    <form action="" method="POST">       
     <h2>Choisi ton thème préféré : </h2>   
    <input type="radio" name="theme" id ="light" value="light"> 
    <label for="light">Thème clair</label>

    <input type="radio" name="theme" id ="dark" value="dark"> 
    <label for="dark">  Thème sombre</label>
    <br>
    <input type="submit" name ="submit" value="appliquer le thème">
              
      </form>
  
  </header>

  <main class="wrap">
    
      <h2>Un petit titre</h2>
      <p>
        Sur cette page, vous pouvez choisir entre un thème clair ou un thème sombre. 
        Cette fonctionnalité est implémentée en PHP en utilisant des cookies pour 
        mémoriser votre préférence. À chaque visite, le site détecte le thème choisi 
        et applique automatiquement la feuille de style correspondante.
      </p>

      <section>
        <h3>Pourquoi cette approche ?</h3>
        <p>
          J'utilise un fichier PHP pour choisir le CSS afin de garder une seule
          URL et pouvoir tester les deux styles en un clic.
        </p>
        <ul>
          <li>Test rapide des thèmes</li>
          <li>Structure HTML simple</li>
          <li>Facile à personnaliser</li>
        </ul>
      </section>
 
</main>
  
</body>
</html>