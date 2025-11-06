<?php
//definir la valeur par défault

$backgroundColor = "#ffffff";
$fontColor = "#000000";



// reprendre les cookies pour faire apparatire le theme au rechargement de la page
if(isset($_COOKIE["backgroundColorCookie"])){
     $backgroundColor = $_COOKIE["backgroundColorCookie"];
} else {
    $backgroundColor = "#ffffff";
}

if(isset($_COOKIE["fontColorCookie"])){
     $fontColor = $_COOKIE["fontColorCookie"];
} else {
    $fontColor = "#000000";
}


// creer le cookie à la selection
if(isset($_POST["ApplyChoices"])){
    $backgroundColor = $_POST["backgroundColor"];
    setcookie("backgroundColorCookie",$_POST["backgroundColor"], time() + 365 * 24 * 3600);
    $fontColor = $_POST["fontColor"];
    setcookie("fontColorCookie",$_POST["fontColor"], time() + 365 * 24 * 3600);
}


// remettre comme initialement 
if(isset($_POST["initialTheme"])){
    setcookie("backgroundColorCookie","", time() - 3600);
    setcookie("fontColorCookie","", time() - 3600);
}



// if(isset($_COOKIE["backgroundColor"])){
//    $backgroundColor = $_POST["backgroundColor"];
//   } else {
//     $backgroundColor = "#ffffff";
// }


// if(isset($_COOKIE["fontColor"])){
//    $fontColor =$_POST["fontColor"];
// } else {
//     $fontColor = "#000000";
// }


// if(isset($_POST["ApplyChoices"])){
//         setcookie( "backgroundColor", $_POST["backgroundColor"], time() + 365 * 24 * 3600);
//         setcookie( "fontColor", $_POST["fontColor"], time() + 365 * 24 * 3600);
//   } 


// if(isset($_POST["initialTheme"])){
//         setcookie( "backgroundColor", " ", time() + 365 * 24 * 3600);
//         setcookie( "fontColor", " ", time() + 365 * 24 * 3600);
//   } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php echo $backgroundColor; ?>;
            color : <?php echo $fontColor; ?>;
        }
        
    </style>
</head>
<body>
    
<form action="" method="POST">
   <h1>Choose your theme</h1>
    <fieldset>
        <legend> Choose your favorite color for : </legend>
        <label for="backgroundColor"> The background color : </label>
        <input type="color" name="backgroundColor" id="backgroundColor" >
        <br>

        <label for="fontColor"> The font color : </label>
        <input type="color" name="fontColor" id="fontColor" >
    </fieldset>
     <input type="submit" name="ApplyChoices" id="apply" value="apply">
     <input type="submit" name="ResetChoices" id="reset" value ="reset">
     <br>
     <input type="submit" name="initialTheme" id="reset" value ="Come back to initial colors">
</form>
</body>
</html>