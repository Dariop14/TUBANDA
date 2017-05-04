<?php

        if(empty($_POST['pNombre'])){
            echo "No haz escrito un nombre. <a href='javascript:history.back();'>Reintentar</a>";
        } else if (empty($_POST['pPais'])){
            echo "No haz escrito tu país. <a href='javascript:history.back();'>Reintentar</a>";
        } else if (empty($_POST['pContrasena'])){
           echo "No haz escrito tu contraseña. <a href='javascript:history.back();'>Reintentar</a>";
        } else {

            $pNombre = mysql_real_escape_string($_POST['pNombre']);
            $pPais = mysql_real_escape_string($_POST['pPais']);
            $pContrasena = mysql_real_escape_string($_POST['pContrasena']);

            $actNombre = mysql_query("UPDATE Usuario SET uNombre ='".$pNombre."' WHERE uID ='".$id_usuario."'  ");
            $actPais = mysql_query("UPDATE Usuario SET uLugarOrigen ='".$pPais."' WHERE uID ='".$id_usuario."'  ");
            $actContrasena = mysql_query("UPDATE Usuario SET uContrasena ='".$pContrasena."' WHERE uID ='".$id_usuario."'  ");

            if($actNombre && $actPais && $actContrasena){
            }
        }

    ?>
