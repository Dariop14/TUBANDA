<?php

        if(empty($_POST['pNombre'])){
            echo "No has escrito un nombre. <a href='javascript:history.back();'>Reintentar</a>";
        } else if (empty($_POST['pPais'])){
            echo "No has escrito tu país. <a href='javascript:history.back();'>Reintentar</a>";
        } else if (empty($_POST['pContrasena'])){
           echo "No has escrito tu contraseña. <a href='javascript:history.back();'>Reintentar</a>";
        } else {

            $actNombre = mysql_query("UPDATE Usuario SET uNombre ='".$pNombre."' WHERE uID ='".$id_usuario."'  ");
            $actPais = mysql_query("UPDATE Usuario SET uLugarOrigen ='".$pPais."' WHERE uID ='".$id_usuario."'  ");
            $actContrasena = mysql_query("UPDATE Usuario SET uContrasena ='".$pContrasena."' WHERE uID ='".$id_usuario."'  ");
            $actImagen = mysql_query("UPDATE Usuario SET uImagen ='".$uImagen_tmp."' WHERE uID ='".$id_usuario."'  ");

            if($actNombre && $actPais && $actContrasena){
            }
        }

    ?>
