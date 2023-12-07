<?php
session_start();
error_reporting(E_ERROR);
$host  = $_SERVER['HTTP_HOST'];
$URL = "http://$host/va2022";
?>

<!DOCTYPE html>
<html lang="es-AR">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME 6.1.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP CSS 5.1.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./views/static/css/main.css">
    <title>GYM UTNFRRo</title>
    <title>Control con voz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<link rel="stylesheet"  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/SpeechKITT/0.3.0/speechkitt.min.js"></script>




    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
    <link href="a1style.css" type="text/css" rel="stylesheet">
</head>
<header class="">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand" href=<?= "$URL/"; ?>>
                <!-- UTN -->
                <!-- <img src="./views/static/img/logo-utn-navbar.png" class="text-light" alt="Logo UTN" style="max-width: 80px;"> -->
                <img src=<?= "$URL/views/static/img/logo-utn-navbar.png" ?> class="text-light" alt="Logo UTN" title="Inicio" style="max-width: 80px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- ITEMS A LA IZQUIERDA DE LA BARRA DE NAVEGACION -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
                <li class="nav-item">
                        <a class="nav-link" href="<?= "$URL/home"; ?>">Home</a>
                    </li>
                    <li class="nav-item">                    
                        <a class="nav-link" href="<?= "$URL/prueba"; ?>" >Home2 </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= "$URL/classes"; ?>">Horarios </a>
                    </li>

                    <?php
                    if (isset($_SESSION["rol"]) and $_SESSION["rol"] != "Admin") {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= "$URL/face-detection-master/index2.php"; ?>">Rec_fa </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= "$URL/nutrition"; ?>" id="nutricion">Nutricion </a>
                    </li>
                    <?php
                    if (isset($_SESSION["rol"]) and $_SESSION["rol"] == "Admin") {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= "$URL/rutina"; ?>" >Rutinas2 </a>
                    </li>
                    <?php
                    }
                    ?>
                   <li class="nav-item" id="rutina10">
                        <a class="nav-link" href="<?= "$URL/RutinasGymApi"; ?>" >Rutinas </a>
                    </li>

                    <li class="nav-item" >
                        <a class="nav-link" href="<?= "$URL/contact"; ?>" id="contacto">Contacto</a>
                    </li>
                    
                    <?php
                    }
                    ?>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= "$URL/cuota"; ?>">Cuota </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= "$URL/compras"; ?>" id="compras">Compras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= "$URL/carrito-compras-php-main/indexCompra.php"; ?>" id="compras2">tienda</a>
                    </li>
                   <!-- <li class="nav-item">
                        <a class="nav-link" href="<?= "$URL/pagos"; ?>">Pagos</a>
                    </li>-->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                    <?php
                    if (isset($_SESSION["rol"]) ){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= "$URL/listado_consultas/1"; ?>">Consultas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= "$URL/mis_consultas/1"; ?>">Mis consultas</a>
                    </li>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($_SESSION["rol"]) and $_SESSION["rol"] == "Admin") {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= "$URL/listado_profesores/1"; ?>">Profesores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= "$URL/listado_materias/1"; ?>">Clases</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>

                <!-- ITEMS A LA DERECHA DE LA BARRA DE NAVEGACION -->

                <ul class="navbar-nav ml-auto">
                    <?php
                    if (!isset($_SESSION["rol"])) {
                    ?>
                        <li class="nav-item ">
                            <a class="nav-link" href=<?= "$URL/login"; ?>>Iniciar sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?= "$URL/register"; ?>>Registrarse</a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $_SESSION["nombre"] ?> <?= $_SESSION["apellido"] ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href=<?= "$URL/profile" ?>>Ver perfil</a></li>
                                <li><a class="dropdown-item" href=<?= "$URL/logout/" ?>>Cerrar sesión</a></li>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>
                </ul>


            </div>
        </div>
    </nav>
    <!-- FIN NAVBAR -->

</header>

<body class="d-flex flex-column min-vh-100" >




    
 

    <?php

$con=mysqli_connect("localhost","root","1234","titangym");
if (isset($_POST['userID']) && isset($_POST['planID'])) {
    $uid  = $_POST['userID'];
    $planid=$_POST['planID'];
    $query1 = "select * from users WHERE userid='$uid'";
    
    $result1 = mysqli_query($con, $query1);
    
    if (mysqli_affected_rows($con) == 1) {
        while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
            
            $name = $row1['username'];
            $query2="select * from plan where pid='$planid'";

            $result2=mysqli_query($con,$query2);
            if($result2){
               $planValue=mysqli_fetch_array($result2,MYSQLI_ASSOC);
               $planName=$planValue['planName'];
            }
        }
    }
    
?>

	
		<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
 

        <div class="a1-card-8 a1-light-gray" style="width:500px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>HACER PAGO</h6>
     
       <form id="form1" name="form1" method="post" class="a1-container" action="submit_payments.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">ID CLIENTE:</td>
           	   <td height="35"><input type="text" name="m_id" id="boxx" value="<?php echo $uid; ?>" readonly/></td>
         	   </tr>
			   
			   <tr>
               <td height="35">NOMBRE:</td>
               <td height="35"><input type="text" name="u_name" id="boxx" value="<?php echo $name; ?>" placeholder="Member Name" maxlength="30" readonly/>
                 
             </tr>
             <tr>
               <td height="35">PLAN ACTUAL</td>
               <td height="35"><input type="text" name="prevPlan" id="boxx" value="<?php echo $planName; ?>" readonly></td></td>
             </tr>
             <tr>
               <td height="35">SELECCIONAR NUEVO PLAN:</td>
               <td height="35"><select name="plan" id="boxx" required onchange="myplandetail(this.value)">
							<option value="">-- Favor Seleccionar --</option>
							<?php
   //$con=mysqli_connect("localhost","root","1234","titangym");
							    $query = "select * from plan where active='yes'";
							    
							    //echo $query;
							    $result = mysqli_query($con, $query);
							    
							    if (mysqli_affected_rows($con) != 0) {
							        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							            echo "<option value=" . $row['pid'] . ">" . $row['planName'] . "</option>";
							            
							        }
							    }
}  
							?>
						</select></td></td>
             </tr>
             
		   
            
             <tr>
			  <table id="plandetls">
             </table>
			 
            
           </table></td>
		   
         </tr>
		  <tr>
               <td height="35">&nbsp;</td>
               <td height="35">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="AGREGAR PAGO" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Borrar"></td>
             </tr>
         </table>
       </form>
       </div>
    </div>   
		
		
		
		

	

		</div>


 <script>
        	function myplandetail(str){

        		if(str==""){
        			document.getElementById("plandetls").innerHTML = "";
        			return;
        		}else{
        			if (window.XMLHttpRequest) {
           		 // code for IE7+, Firefox, Chrome, Opera, Safari
           			 xmlhttp = new XMLHttpRequest();
       				 }
       			 	xmlhttp.onreadystatechange = function() {
            		if (this.readyState == 4 && this.status == 200) {
               		 document.getElementById("plandetls").innerHTML=this.responseText;
                
            			}
        			};
        			
       				 //xmlhttp.open("GET","plandetail.php?q="+str,true);
                xmlhttp.open("GET","plandetail.php?q="+str,true);
       				 xmlhttp.send();	
        		}
        		
        	}
        </script>

<footer class="text-center text-lg-start bg-dark text-light mt-auto" id="abajo">


       
      
    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start p-4">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->

                <!-- Grid column -->

                <!-- Grid column -->
               <!-- <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                     Links 
                    <h6 class="text-uppercase fw-bold mb-4">
                        Contacto
                    </h6>-->
                    <div class="footer1">
                <ul>
                    
                    <p>
                    <img src=<?= "../static/img/logo-utn-footer.png" ?> class="img-fluid" alt="Logo UTN" width="100" height="100" >
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-home me-3"></i>Rosario-Zeballos 1341&nbsp; &nbsp;
                        <i class="fas fa-envelope me-3"></i>info@utnfrro.com.ar&nbsp; &nbsp;
                        <i class="fas fa-phone me-3"></i>0341 - 4481871
                    
                   
                        <b>  &nbsp;Copyright © 2022. Todos los derechos reservados </b> 
                    </p>
                </ul>
                        
                        

                    
                    <!-- <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p> -->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        <!-- REDES -->
        <div>
            <a href="https://www.facebook.com/" class="me-4 text-reset" id="facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.google.com/maps/dir/-32.9383936,-60.6666752/utn+rosario/@-32.9463722,-60.6750393,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x95b7ab11d0eb49c3:0x11f1d3d54f950dd0!2m2!1d-60.6437319!2d-32.9544347" class="me-4 text-reset" id="llegar">
                <i class="fab fa-google"></i>
            </a>
            <a href="https://www.instagram.com/" class="me-4 text-reset" id="intagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
 
         
        </div>
        <!-- FIN REDES -->

    </div>
   
        
</footer>
<!-- END FOOTER -->

<!-- BOOTSTRAP JS 5.1.3 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
