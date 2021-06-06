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


    //forças na vertical:

    $f1 = $ac * $w; // força da distribuição W em AC
    $f2 = ( $ce + $ef ) * 2 * $w; // força da distribuição W em CF

    $fe = (($f1*($ac/2)) + ($p*($ac + $ce)) + ($f2*((($ce+$ef)/2)+$ac))) / ((($de*$ac*$ac*$elasticidadeBC*$area_arameBC)/($bc*($ac+$ce)*$elasticidadeDE*$area_arameDE)) +$ac +$ce); //Força em E
    $fc = (($fe*$de*$ac*$elasticidadeBC*$area_arameBC)/($bc*($ac+$ce)*$elasticidadeDE*$area_arameDE)); //Força em C
    $fay = - $p - $f1 - $f2 + $fc + $fc; //Força vertical em A

    //deslocamentos

    $deslocamento_c = ($fc*$bc)/($elasticidadeBC*pow(10,9)*$area_arameBC); //deslocamento no ponto C
    $deslocamento_e = ($fe*$de)/($elasticidadeDE*pow(10,9)*$area_arameDE); //deslocamento no ponto E
    $deslocamento_f = ($deslocamento_e*($ac+$ce+$ef))/($ac+$ce); //deslocamento no ponto F

    $tensao_c = $fc/$area_arameBC;
    $tensao_e = $fe/$area_arameDE;

    ?>

        <?php

    print("Força Fay: ");
    echo $fay. " N";
    ?>
        <br><br>
    <?php
    print("Força Fc: ");
    echo $fc . " N";
    ?>
        <br><br>
    <?php
    print("Força Fe: ");
    echo $fe . " N";
    ?>
        <br><br>
    <?php
    print("Deslocamento C: ");
    echo $deslocamento_c . " metros";
    ?>
        <br><br>
    <?php
    print("Deslocamento E: ");
    echo $deslocamento_e . " metros";
    ?>
        <br><br>
    <?php
    print("Deslocamento F: ");
    echo $deslocamento_f . " metros";

    if($tensao_c > ($escoamentoBC*pow(10, 9))){

        ?><br><br><?php
        echo("\nO arame C ultrapassou o limite de escoamento");

    }
    if($tensao_e > ($escoamentoDE*pow(10, 9))){

        ?><br><br><?php
        echo("\nO arame E ultrapassou o limte de escoamento");

    }
    ?>

        <br><br>
        <a style="color: indianred" href="?pagina=home">Voltar</a>

    </div>
</div>