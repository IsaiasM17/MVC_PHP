<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title><?php echo COMPANY; ?></title>

    <?php 
        
        include "./vistas/inc/Link.php";
        
    ?>

</head>
<body>

    <?php 
    
    $peticionAjax = false;

    require_once "./controladores/vistasControlador.php";
    
    //$IV = INSTANCIA VISTA
    $IV = new vistasControlador();

    $vistas  = $IV->obtener_vistas_controlador();

    if($vistas == "login" || $vistas == "404"){
        require_once './vistas/contenidos/'.$vistas.'-view.php';

    }else{
    
    ?>
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->

        <?php 
        
        include "./vistas/inc/NavLateral.php";
        
        ?>

		<!-- Page content -->
		<section class="full-box page-content">

        <?php 
        
        include "./vistas/inc/Navbar.php";
        
        include $vistas;

        ?>


		</section>
	</main>

    <?php 

    }
        
        include "./vistas/inc/Script.php";
        
    ?>

</body>
</html>