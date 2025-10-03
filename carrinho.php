<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>

    <?php
    session_start();
      


    for ($i=0; $i < count($_SESSION['carrinho']); $i++) { 
        echo '<p>'.$_SESSION['carrinho'][$i]['nome'].' - R$ '.$_SESSION['carrinho'][$i]['preco'].'</p>';
        $total += $_SESSION['carrinho'][$i]['preco'];
    }
    echo '<h3>Total: R$ '.$total.'</h3>';

    if(isset($_POST['limpar'])) {
        $_SESSION['carrinho'] = [];
        header('Location: carrinho.php');
        exit;
        echo '<p>Carrinho limpo!</p>';
    }

    ?>

    <form method="post" >
        <button name="limpar" type="submit">limpar carrinho</button>
    </form>    

    <a href="produtos.php">Voltar para produtos</a>
</body>
</html>