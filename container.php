<?php
require_once 'functions.php';


$containers = buscarContainer($connect);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="assets/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTAINERS - Cyber Container</title>
</head>
<body>
    <header>        
        <?php include "layouts/menu.php"?>   
        <div class="topo">
            <?php
            echo "<h1>Olá " . $usuario . ". Você está no página de gerenciamento de containers.";
            ?>
        </div>     
    </header>
    <hr>
    <main>
        <div class="cadastro">
            <form class="formContainer" action="" method="post">
                <fieldset class="formHorizontal">
                    <legend>Cadastrar Novo Container</legend>
                    <div>
                        <label for="cliente">Cliente:</label>
                        <input id="cliente" type="text" name="cliente" required placeholder="Nome do cliente">
                    </div>
                    <div>
                        <label for="chassi">Chassi:</label>
                        <input id="chassi type="text" name="chassi" required placeholder="Número do container">
                    </div>
                    <div>
                        <label for="tipo">Tipo:</label>
                        <select id="tipo" name="tipo" requered>
                            <option value="20">20</option>
                            <option value="40">40</option>
                        </select>
                    </div>
                    <div>
                        <label for="status">Status:</label>
                        <select id="status" name="status" requered>
                            <option value="Vazio">Vazio</option>
                            <option value="Cheio">Cheio</option>
                        </select>
                    </div>
                    <div>
                        <label for="categoria">Categoria:</label>
                        <select id="categoria" name="categoria" requered>
                            <option value="Exportação">Exportação</option>
                            <option value="Importação">Importação</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" name="cadastrar" value="Cadastrar">
                    </div>                
                </fieldset>
            </form>
            <div class="mensagem">
            <?php inserirContainer($connect) ?>
            </div>
        </div>
        <div class="alteracao">
            <h2 class="tituloTabela">Lista de Containers Cadastrados</h2>
            <table>
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Chassi</th>
                        <th>Tipo</th>
                        <th>Status</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($containers as $container): ?>
                        <tr>
                            <td><?php echo $container['cliente']?></td>
                            <td><?php echo $container['chassi']?></td>
                            <td><?php echo $container['tipo']?></td>
                            <td><?php echo $container['status']?></td>
                            <td><?php echo $container['categoria']?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
    </main>
    <?php include "layouts/footer.php"?>
    
    
</body>
</html>

