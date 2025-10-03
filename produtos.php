<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
        <h1>Produtos</h1>

        <?php
            session_start();

            echo '<br/><button><a href="carrinho.php"> <br/> Carrinho '.count($_SESSION['carrinho']).'</a></button>';

            $produtos = [
                ['id' => 1, 'nome' => 'Pão frances', 'preco' => 5.9],
                ['id' => 2, 'nome' => 'Rosquinhas', 'preco' => 7.9],
                ['id' => 3, 'nome' => 'Leite', 'preco' => 10],
            ];

            if (!isset($_SESSION['carrinho'])) {
                $_SESSION['carrinho'] = [];
            }

            if(isset($_POST['produto_id'])) {
            $produto_id = $_POST['produto_id'];
            foreach ($produtos as $produto) {
                if ($produto['id'] == $produto_id) {                     
                    $_SESSION['carrinho'][] = $produto;
                        echo '<p>Produto '.$produto['nome'].' adicionado ao carrinho!</p>';
                        echo '<p>Produto '.$carrinho['nome'].' adicionado ao carrinho!</p>';   
                    }
                }
            header('Location: produtos.php');
            exit;
            }

            for ($i=0; $i < count($produtos); $i++) { 
                echo '<p>'.$produtos[$i]['nome'].' - R$ '.$produtos[$i]['preco'].'</p>';
                echo '<form method="post">
                        <input type="hidden" name="produto_id" value="'.$produtos[$i]['id'].'">
                        <button type="submit">Comprar</button>
                     </form>';
            }
            
            
        ?>



</body>
</html>