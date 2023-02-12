<?php

// Initialisation de curl
$curl = curl_init();

// Envoie de la requete GET à reqres.in
//  le serveur reccupere les données du JSON
curl_setopt($curl, CURLOPT_URL, "https://reqres.in/api/users?page=1");

// demander a curl de sauvegarder les données JSON dans une variable 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execution de curl
$response = curl_exec($curl);

// Verifier s'il ya des erreues

if ($e = curl_error($curl)) {
	echo $e;
} else {

	// Décodage du fichier JSON
	$decodedData = json_decode($response, true);

	// Affichage des données décodées
	var_dump($decodedData);
}

// Fermeture de curl
curl_close($curl);