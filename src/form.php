<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../style/estilo.css">
    <title>Calculador de Compras</title>
</head>
<body>
    <?php
        $num = 0;
        $qtd_pessoas = isset($_POST["qtd-pessoas"])?$_POST["qtd-pessoas"]:0;
        while($num < $qtd_pessoas){
            echo "<form id='preco-qtd$num' onsubmit='return false'>";
                echo "<p> <textarea name='name-buyer' id='iname-buyer' rows='1' cols='5' placeholder='Nome'></textarea>";
                echo " Preço: R$ <input class='preco' type='number' style= 'width: 80px' placeholder='Ex: 10,50' min='0' onkeypress='addItensByEnter(event, $num)'>";
                echo " Quantidade: <select name='qtd-itens' class='iqtd-itens'>";
                    echo "<option value='1' selected>1</option>";
                    for($i=2; $i <=10; $i++){
                        echo "<option value='$i'>$i</option>";
                    }
                echo "</select>";
                echo " <button type='button' onclick='addItens($num)'>Adicionar</button>";
                echo " <span class='itens'></span></p>";
            echo "</form>";
            $num++;
        }
    ?>

    <p><button type='button' onclick='calcTotal()'>Calcular Total</button></p>
    <p><span id='total'></span></p>
    <p><a href='../index.php' id="back">Voltar</a></p>

    <script src="../scripts/funcoes.js"></script>
    <footer id="rodape">
        <p>Copyright &copy; 2020 - by <a href="https://github.com/AllanCapistrano" target="_blank">Allan Capistrano</a></p>
    </footer>
</body>
</html>