<?php

  
function Conectarse()

{

if(!($link=mssql_connect("192.168.1.4","APLICACIONES","APLICACIONES")))
{

echo"Error de Conexion Servidor";

	exit();
}
  if (!mssql_select_db("[010BDCOMUN]",$link)) 
  {

  	echo"Error seleccionando la base de datos";

  	exit();
}

return $link;

}


  ?>