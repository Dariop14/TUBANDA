<html lang="es">

<head>
<meta charset="utf-8" />
<title>Nuevo Perfil</title>
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

            function cerrarPublicacion(){
                document.getElementById("Formulario").style.display="none";
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
<!-- Se agrega el header y el menu desde archivos externos  -->
<?php  include("Header.php");  ?>

<?php  include("menu.php");  ?>

<div class="PrincipalContainer" id="Formulario">
  <!-- Se llama al archivo que contiene la validación y el agregar datos a la base de datos -->
    <?php include("validarNuevoPerfil.php"); ?>
  <!-- Formulario de registro de nuevo perfil -->
    <form method="POST" enctype="multipart/form-data">
        <label><p>¿Qué tipo de perfil deseas publicar? </p></label>
            <input type="radio" class="campo" name="tipo" value="musico" checked>Músico
            <input type="radio" class="campo" name="tipo" value="banda">Banda
        <label><p>¿Cuál es el nombre del Músico / Banda?</p></label>
            <input type="text" class="campo" name="nombre" placeholder="Escribe el nombre del músico o banda">
        <label><p>¿Cuál es el género musical del músico o banda?</p></label>
            <input type="text" class="campo" name="genero" placeholder="Escribe el género del músico o banda">
        <label><p>¿Qué instrumento toca? (De ser una banda, escribir 'varios')</p></label>
            <input type="text" class="campo" name="instrumento" placeholder="De ser una banda, escribir 'varios'">
        <label><p>Añade una descripción del músico o banda</p></label>
            <textarea cols="80" rows="8" name="descripcion"></textarea>
        <label><p>Agrega una imagen para el perfil (JPG, JPEG, PNG)</p></label>
            <!-- Aqui esta el input que debe reemplazarse por el de subida de imagen -->
            <input type="file" name="imagen" /><br><br><br>
        <input type="submit" class="Submit" name="publicar" value="Publicar">
    </form>

</div>

<footer>
  <!-- Se agrega el footer -->
      <?php  include("Footer.php");  ?>
</footer>

</body>
