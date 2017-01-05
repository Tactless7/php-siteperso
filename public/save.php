<div>
	Message enregistré avec succès !
</div><?php 
function saveUserInfo(){
	$email = $_GET['emailFrom'];
	$message = $_GET['message'];

	$data = array('email' => $email, 'message' => $message);
	$json = json_encode($data);

	$file = '../data/last_message.json';
	file_put_contents($file, $json);
}

saveUserInfo();