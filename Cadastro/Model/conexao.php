<?php


    function conectar(){

    $conn = mysqli_connect('localhost', 'root', '', 'imobitec');
    
	if(!$conn){
            
		return "Conexão não abre !" ;
                
	}else{
            
		return $conn ;
    }
    

    
}
