<?php

include "header.html";

if(isset($_GET['pagina'])){

    $pagina = $_GET['pagina'];

}else{

    $pagina = NULL;

}

if($pagina == 'resultado'){

    include 'processa_projeto.php';

}else{

    include 'home.html';

}

include 'footer.html';

?>