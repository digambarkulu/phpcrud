<?php


session_start();

// Function to Set Flash Message

function setFlashMessage($message,$type = 'success'){
	$_SESSION['flash_message'] = [
		'message' => $message,
		'type' => $type 
	];
}

// Function Display the message and clear it 

function displayMessage(){

	if(isset($_SESSION['flash_message'])){
		$message = $_SESSION['flash_message']['message'];
		$type = $_SESSION['flash_message']['type'];

		echo '<div class="flash_message '.$type.'">'.$message.'</div>';

		unset($_SESSION['flash_message']);
	}
}

?>