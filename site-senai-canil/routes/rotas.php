<?php
include "./controller/controlador.php";
$URL = $_SERVER["REQUEST_URI"];
echo $URL;

if($URL == "/site-senai-canil/"){
   mainPage();
} else if($URL == "/site-senai-canil/gatos"){
    gatosPage();
} else if($URL == "/site-senai-canil/cachorros"){
    cachorroPage();
} else if($URL == "/site-senai-canil/peixes"){
    peixePage();
} else if($URL == "/site-senai-canil/pesquisa"){
    echo "Rota de Pesquisa";
} else{
    echo "Not Found!";
}

?>