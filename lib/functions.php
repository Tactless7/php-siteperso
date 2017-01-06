<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	} else {
		$name = $_GET['page'];
		include __DIR__.'/../pages/'.$name.'.php';
	}
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData($path){
	$filename = __DIR__.$path;
	$data = file_get_contents($filename);
	return json_decode($data, true);
}

function displayLastMessage($data){
	foreach ($data as $key => $value) {
		echo '<p>'.$key.' : '. $value.'</p>';
	}
}