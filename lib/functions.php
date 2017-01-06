<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/
// $pages =array('contact','bio','home');
function getContent(){
	if(!isset($_GET['pages'])){
		include __DIR__.'/../pages/home.php';
	} else {
		// le reste du code
		include '../pages/'.$_GET['pages'].'.php';
	}
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}
function  getUserData(){
	$file = file_get_contents('../data/user.json');
	$obj = json_decode($file);
	foreach ($obj as $i => $value) {

		
		if(is_array($value) ){ 
			echo "$i  <br>";  

		}
		else 
		{ 
			echo "$i :$value</br>";
		} 





	}

}