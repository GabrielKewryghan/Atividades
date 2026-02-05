<?php

include "./controller/controlador.php";

$URL = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

if($URL == "/canilsenai/"){
    mainPage();
}
else if ($URL == "/canilsenai/gatos"){
    gatosPage();

}

else if ($URL == "/canilsenai/cachorros"){
    cachorrosPage();
    
}


else if ($URL == "/canilsenai/peixes"){
    peixesPage();
    
}

else if ($URL == "/canilsenai/passaros"){
    passarosPage();
    
}

else if ($URL == "/canilsenai/pesquisa"){
    pesquisaPage();
}

else {
        echo $URL;
    echo "NOT FOUND!!!";
}
?>




