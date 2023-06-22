<?php
if(isset($_POST['length'])){
		
			$taken_length = $_POST['length'];
			
				$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()∵‸ ⁁ ⎀©ɔ';
				echo $printer = substr(str_shuffle($characters),0,$taken_length);

		
}	
	
	else echo "password will be available here";
	$printer='';
?>