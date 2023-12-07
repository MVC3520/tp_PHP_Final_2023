<?php
/*
$host  = $_SERVER['HTTP_HOST'];
$URL = "http://$host/gym2022";

// HEADER Y BARRA DE NAVEGACION
include_once "../views/templates/head.php";
include_once "../views/templates/navigation.php";
require_once "../controllers/vistaController.php";

// FIN BARRA DE NAVEGACION
// FIN HEADER


*/

?>
<!DOCTYPE html>
<html lang="en">
    <title>Face Detection</title>
   
    <script defer src=<?= "js/face-api.min.js" ?>></script>
    <script defer src=<?= "js/script.js" ?>></script>
    
    
<body id="face" >
    <video id="video" width="720" height="560" autoplay muted></video>
</body>
</html>
<?php
/*
// FOOTER
include_once "../views/templates/footer.php";
// FIN FOOTER
*/
?>
<style> @charset "utf-8";

   body{
        margin: 0;
        padding: 0;
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
       
    }
    
   canvas{
        position: absolute;
    } </style>