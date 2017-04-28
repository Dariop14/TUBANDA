<!DOCTYPE html>
<html>
<head>
  <title>Buscador</title>
  <link rel="stylesheet" href="estilosBuscador.css" />
</head>
<body>
     <form action="insertarDatos.php" method="post" enctype="multipart/form-data">
       <table width="500" border="2" cellspacing="2" align="center">
         <tr>
           <td colspan="5">
             Ingresa tus datos
           </td>
         </tr>
         <tr>
           <td>Nombre banda/artista:</td>
           <td><input type="text" name="pNombre" /></td>
         </tr>
         <tr>
           <td>Link:</td>
           <td><input type="text" name="pLink" /></td>
         </tr>
         <tr>
           <td>Genero:</td>
           <td><?php include("genero.php"); ?></td>
         </tr>
         <tr>
           <td>Instrumento:</td>
           <td><?php include("instrumento.php"); ?></td>
         </tr>
         <tr>
           <td>Descripcion:</td>
           <td><textarea cols="16" rows="8"  name="pDescripcion"></textarea></td>
         </tr>
         <tr>
           <td>Imagen:</td>
           <td><input type="file" name="pImagen" /> </td>
         </tr>
         <tr>
           <td>tags:</td>
           <td><input type="text" name="pKeywords" /> </td>
         </tr>
         <tr>
           <td align="center" colspan="5"><input type="submit" name="submitBuscador" value="Guardar Datos"/> </td>
         </tr>
       </table>
     </form>
</body>
</html>

<?php
  include('acceso_db.php');
  //al dar click en guardarDatos
  if(isset($_POST['submitBuscador']))
  {
    //guardar datos de usuario en las variables
    $pNombre = $_POST['pNombre'];
    $pLink = $_POST['pLink'];
    $pInstrumento = $_POST['pInstrumento'];
    $pGenero = $_POST['pGenero'];
    $pDescripcion = $_POST['pDescripcion'];
    $pKeywords = $_POST['pKeywords'];
    $pImagen = $_FILES['pImagen']['name'];
    $pImagen_tmp = $_FILES['pImagen']['tmp_name'];


    if($pNombre === '' OR $pLink ==='' OR $pKeywords ==='' OR $pDescripcion === '')
    {
      echo "<script>alert('Por favor ingresar Todos los datos')</script>";
      include("perfil.php");
      exit();
    }else {
    //ingresamos los datos en la DB
    $insert_query = "insert into Perfil(pNombre, pLink, pKeywords, pDescripcion, pImagen, pGenero, pInstrumento) values('$pNombre', '$pLink', '$pKeywords', '$pDescripcion', '$pImagen', '$pGenero', '$pInstrumento')";
    //cargar las imagenen en la carpeta ImagenesBuscador
     move_uploaded_file($pImagen_tmp,"imagenesBuscador/{$pImagen}");

    if(mysql_query($insert_query)){
      echo "<script>alert('Datos guardados en la tabla ')</script>";
    }
      }
  }
 ?>
