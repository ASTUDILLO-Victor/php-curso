<?php
// variable de servidor 
echo"<h1>";
echo $_SERVER["SERVER_ADDR"];// la ip de mi servidor web
echo"</h1>";

//nombre del dominio 
echo"<h1>";
echo $_SERVER["SERVER_NAME"];// la ip de mi servidor web
echo"</h1>";
//QUE HERRAMIENTA ESTOY USANDO EL SOFTWARE
echo"<h1>";
echo $_SERVER["SERVER_SOFTWARE"];// la ip de mi servidor web
echo"</h1>";

//SACAR EL NAVEGADOR WEB DE DONDE ESTOY ENTRANDO 
echo"<h1>";
echo $_SERVER["HTTP_USER_AGENT"];// la ip de mi servidor web
echo"</h1>";

// QUE IP TIENE MI USUARIO 
echo"<h1>";
echo $_SERVER["REMOTE_ADDR"];// la ip de mi servidor web
echo"</h1>";