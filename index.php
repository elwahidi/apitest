<?php 

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if($method == 'POST'){
	 
	echo json_encode("test");
}
else
{
	echo "Method not allowed";
}

?>
