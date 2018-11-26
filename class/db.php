<?php

class dba {

	//  nome do host
	private $host = 'localhost';

	//  nome do host
	private $usuario = 'root';

//  nome do host
	private $senha ='';

//  nome do host
	private $database = 'aula';


// vamoa a crear una funcion para la conexion


public function conecta_mysql (){

$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

if(mysql_errno()){
	echo 'Erro'. mysql_connect_error();
}

return $con;

}// fin d la funcion 



} // fin de la clase


  ?>