<?php
include('settings.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
// On test si la requete envoyée est en post parce que sinon la requete de quand on arrive sur la page fait buger
    if (isset($_POST['nbrCol'])){
        if (trim($_POST['nbrCol']) !== "") {
            if (ctype_digit($_POST['nbrCol'])){
                if ($_POST['nbrCol'] >= 1){
                    $nbrCol = intval($_POST[ 'nbrCol' ]);
                }else{
                    $errors["nbrCol"] = "Oops, on dirait que vous essayer de tricher, le nombre de colonnes doit être plus grand ou égal à 1";
                }
            }else {
                $errors["nbrCol"] = "Oops, on dirait que vous essayer de tricher, le nombre de colonnes doit etre un nombre";
            }
        }else {
            $errors["nbrCol"] = "Oops, on dirait que vous essayer de tricher, le nombre de colonnes ne doit pas être vide";
        }
    }else{
        $errors["nbrCol"] = "Oops, on dirait que vous essayer de tricher, le nombre de colonnes est absent de la requête";
    }

    if (isset($_POST['nbrRaw'])){
        if (trim($_POST['nbrRaw']) !== "") {
            if (ctype_digit($_POST['nbrRaw'])){
                if ($_POST['nbrRaw'] >= 1){
                    $nbrRaw = intval($_POST[ 'nbrRaw' ]);
                }else{
                    $errors["nbrRaw"] = "Oops, on dirait que vous essayer de tricher, le nombre de lignes doit être plus grand ou égal à 1";
                }
            }else {
                $errors["nbrRaw"] = "Oops, on dirait que vous essayer de tricher, le nombre de lignes doit etre un nombre";
            }
        }else {
            $errors["nbrRaw"] = "Oops, on dirait que vous essayer de tricher, le nombre de lignes ne doit pas être vide";
        }
    }else{
        $errors["nbrRaw"] = "Oops, on dirait que vous essayer de tricher, le nombre de lignes est absent de la requête";
    }
}

if ($nbrCol && $nbrRaw){
    $view = '_table.php';
}

include('layout.php');
