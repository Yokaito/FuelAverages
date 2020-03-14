<?php	

        $server = 'localhost';
		$user = 'root';
		$pass = '';
		$bd = 'db';
		
		$conn = new mysqli($server, $user, $pass, $bd);
					
		if($conn->connect_error){
			//
		}	
		
?>