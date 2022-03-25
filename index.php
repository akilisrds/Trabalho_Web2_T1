<?php
require_once 'Classes/Armazem.php';
require_once 'Classes/Calculador.php';
require_once 'Classes/Estrutura.php';
    session_start();
    $oArmazem = new Armazem();
    
    $oCalculador = new Calculador();
    
    $oArmazem->setValorAtual('');
    if (isset($_GET['Voltar'])){
        session_destroy();
        header('Location="index.php"');
    }
    if (isset($_GET['num'])) {
        $oArmazem->setNumeroCampoAtual($_GET['num'][0]);
    }
    
    if (isset($_GET['calc']) && !isset($_GET['op'])) {
        $oArmazem->setNumeroTotal($oArmazem->getNumeroCampoAtual()); 
        $oArmazem->setNumeroCampoAtual('');
    }
    if (isset($_GET['calc']) && isset($_GET['num'])) {
        $oArmazem->setValorAtual($oArmazem->getNumeroTotal());
    }
    if (isset($_GET['op'])){
        $oCalculador->setOperadorAritmeticos($_GET['op']);
        $oArmazem->setValorAnterior($oArmazem->getNumeroTotal());
        $oArmazem->zeraNumeroTotal();
        $oArmazem->setNumeroCampoAtual('');
    }
    if (isset($_GET['resultado'])) {
        $iValorResultado = $oCalculador->calcular($oArmazem, $oArmazem->getValorAnterior(), $oArmazem->getNumeroTotal());
        $oArmazem->setValorAtual($iValorResultado);
    }
?>

<fieldset>
    <form action="" method="get">
    <table>
    <tr>
        <td colspan="4">
            <input type="text" name="calc" value="<?=$oArmazem->getValorAtual()?>" />
        </td>
    </tr>
        <tr>
            <td>
                <input type="submit" name="num[]" value="7">
            </td>
            <td>
                <input type="submit" name="num[]" value="8">
            </td>
            <td>
                <input type="submit" name="num[]" value="9">
            </td>
            <td>
                <input type="submit" name="op" value="%" />
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="num[]" value="4">
            </td>
            <td>
                <input type="submit" name="num[]" value="5">
            </td>
            <td>
                <input type="submit" name="num[]" value="6">
            </td>
            <td>
                <input type="submit" name="op" value="X" />
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="num[]" value="1">
            </td>
            <td>
                <input type="submit" name="num[]" value="2">
            </td>
            <td>
                <input type="submit" name="num[]" value="3">
            </td>
            <td>
                <input type="submit" name="op" value="-" />
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="num[]" value="0">
            </td>
            <td>
                <input type="submit" name="num[]" value="C">
            </td>
            <td>
                <input type="submit" name="resultado" value="=">
            </td>
            <td>
                <input type="submit" name="op" value="+" />
            </td>
        </tr>
    </table>
        <hr>
        <input type="submit" name="Voltar" value="Voltar" />
    </form>
</fieldset>