<?php

$link
=mysql_connect(
"localhost"
,
"usuario"
,
"clave"
);

mysql_select_db(
"DB_TuBanda"
,
$link
) OR DIE (
"Error: No es posible establecer la conexión"
);

 ?>
