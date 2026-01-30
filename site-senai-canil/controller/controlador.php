<?php
include "./data/animals.php";

function mainPage() {
    global $items;
    $banner = "./images/allanimals.jpg";
    $title = "Todos os animais";
    $content = $items;

    include "./include/layout.php";
}
function gatosPage() {
    $banner = "./images/allanimals.jpg";
    $title = "Gatos";
    $content = $items;

    include "./include/layout.php";
}
function cachorroPage() {
    $banner = "./images/allanimals.jpg";
    $title = "Cachorros";
    $content = $items;
    
    include "./include/layout.php";
}
function peixePage() {
    $banner = "./images/allanimals.jpg";
    $title = "Peixes";
    $content = $items;
    
    include "./include/layout.php";
}
?>