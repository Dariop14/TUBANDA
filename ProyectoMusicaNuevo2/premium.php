<html lang="es">

<head>
<meta charset="utf-8" />
<title>Premium</title>
<link rel="stylesheet" href="css/masterEstilos.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
            function desplegar(){
                document.getElementById("InicioSesion").style.display="block";
            }

            function cerrar(){
                document.getElementById("InicioSesion").style.display="none";
            }

            function desplegarRegistro(){
                document.getElementById("registro").style.display="block";
            }

            function cerrarRegistro(){
                document.getElementById("registro").style.display="none";
            }

            function MenuResponsive()
            {
              var x = document.getElementById("BarraResponsive");
               if (x.className === "menu") {
                   x.className += " responsive";
               } else {
                   x.className = "menu";
               }
             }

  </script>

</head>
<body>

<?php  include("Header.php");  ?>

<?php  include("menu.php");  ?>


<footer>
      <?php  include("Footer.php");  ?>
</footer>

</body>
