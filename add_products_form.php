<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'myDB');

$db = new mysqli('localhost', 'root', '', 'myDB');



$errors   = array();


if (isset($_POST['add_btn'])) {
    add_product();
}

function add_product(){
    global $db, $errors;

    $price    =  e($_POST['price']);
    $UrlImage       =  e($_POST['UrlImage']);
    $salatname  =  e($_POST['salatname']);

    if (empty($price)) {
        array_push($errors, "price is required");
    }
    if (empty($UrlImage)) {
        array_push($errors, "UrlImage is required");
    }
    if (empty($salatname)) {
        array_push($errors, "salatname is required");
    }

    if (count($errors) == 0) {
        

        if (isset($_POST['Salat_s'])) {
            $Salat_s = e($_POST['Salat_s']);
            $query = "INSERT INTO Salats (price, UrlImage, salatname) 
        VALUES('$price', '$UrlImage', '$salatname')";

        try {
            $db->query($query);
        } catch (Exception $e) {
            echo 'Exception abgefangen: ',  $e->getMessage(), "\n";
            die;
        }

            $_SESSION['success']  = "New Products successfully added!!";
        }else{
            $query = "INSERT INTO Salats (price, UrlImage, salatname) 
        VALUES('$price', '$UrlImage', '$salatname')";
            mysqli_query($db, $query);

            try {

            } catch (Exception $e){
                die;
            }
        }

    }

}

try {

} catch (Exception $e){
    echo 'Exception abgefangen: ',  $e->getMessage(), "\n";
    die;
}

function e($val){
    global $db;
    return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
    global $errors;

    if (count($errors) > 0){
        echo '<div class="error">';
        foreach ($errors as $error){
            echo $error .'<br>';
        }
        echo '</div>';
    }
}

?>
