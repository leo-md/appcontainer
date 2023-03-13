<?php
$usuario = 'Leonardo';

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'cybercontainer';

$connect = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

//FUNÇÔES

//Buscar informações da DB

function buscarContainer($connect, $where=1, $order=""){
    if(!empty($order)){
        $order = "ORDER BY $order";
    }

    $queryBusca = "SELECT * FROM containers WHERE $where $order";
    $executar = mysqli_query($connect, $queryBusca);
    $resultado = mysqli_fetch_all($executar, MYSQLI_ASSOC);
    return $resultado;
}

// inserir novo container no DB

function inserirContainer($connect){
    if(isset($_POST['cadastrar']) AND !empty($_POST['cliente']) AND !empty($_POST['chassi']) AND !empty($_POST['status']) AND !empty($_POST['tipo']) AND !empty($_POST['categoria'])){
        $erros = array();
        $cliente = mysqli_real_escape_string($connect, $_POST['cliente']);
        $chassi = $_POST['chassi'];
        $tipo = $_POST['tipo'];
        $status = $_POST['status'];
        $categoria = $_POST['categoria'];

        if(strlen($chassi) !=11){
            $erros[] = "O chassi deve conter exatos 11 caracteres.";
        }

        if(empty($erros)){
            $queryNovoContainer = "INSERT INTO containers VALUES ('$cliente', '$chassi', '$tipo', '$status', '$categoria')";
            $executarNovo = mysqli_query($connect, $queryNovoContainer);

            if($executarNovo){
                echo "<p>Container cadastrado com sucesso</p>";
            } else {
                echo "<p>Erro ao cadastrar o container.</p>";
            }

        } else {
            foreach ($erros as $erro) {
                echo "<p>$erro</p>";
            }
        }


    }
    
}




?>