<div style="text-align: left">
<img src="Imagens/Screenshot_1.png" alt="Problema" width="526" height="376">
    <div style="float: right;text-align: center; padding-right: 100px; padding-top: 20px">
    <?php

    /* Valores recebidos pelo formulario web
       Usando o método POST
    */

    $w = $_POST['w']; //distribuição de cargas W
    $p = $_POST['carregamento']; //carregamento P
    $area_arameBC = $_POST['areaBC']; // area da seção transversal do arame BC
    $area_arameDE = $_POST['areaDE']; // area da seção transversal do arame DE
    $escoamentoBC = $_POST['escoamentoBC']; //limite de escoamente do arame BC
    $escoamentoDE = $_POST['escoamentoDE']; //limite de escoamente do arame DE
    $elasticidadeBC = $_POST['elasticidadeBC']; //módulo de elasticidade do arame BC
    $elasticidadeDE = $_POST['elasticidadeDE']; //módulo de elasticidade do arame DE
    $ac = $_POST['ac']; // valor de L3
    $ce = $_POST['ce']; // valor de L4
    $ef = $_POST['ef']; // valor de L5
    $bc = $_POST['bc']; // valor de L1
    $de = $_POST['de']; // valor de L2

  ?>

        <br><br>
        <a style="color: indianred" href="?pagina=home">Voltar</a>

    </div>
</div>