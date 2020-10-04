<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="../style/style_formPage.css">
  <title>Calculador de Compras</title>
</head>

<body>
  <div id="interface">
    <h1>Calculador de compras</h1>
    <?php
    $num = 0;
    $qtd_pessoas = isset($_POST["qtd-pessoas"]) ? $_POST["qtd-pessoas"] : 0;
    while ($num < $qtd_pessoas) {
      echo "<form id='preco-qtd$num' onsubmit='return false'>";
      echo "<p> <input class='iname-buyer' type='text' placeholder='Nome'></textarea>";
      echo " Preço: R$ <input class='preco' type='number' placeholder='Ex: 10,50' min='0' onkeypress='addItensByEnter(event, $num)'>";
      echo " Quantidade: <select name='qtd-itens' class='iqtd-itens'>";
      echo "<option value='1' selected>1</option>";
      for ($i = 2; $i <= 10; $i++) {
        echo "<option value='$i'>$i</option>";
      }
      echo "</select>";
      echo " <button type='button' onclick='addItens($num)'>Adicionar</button>";
      echo "</form>";
      $num++;
    }
    echo "<p><button type='button' id='icalcTotal' onclick='calcTotal($num)'>Calcular Total</button></p>";
    $num += 1;
    echo "<form method='POST' action='./teste.php' onsubmit='return false'>";
    echo "<select name='valores' id='ivalores' size=$num>";
    echo "<option value='0'>Aqui serão mostrados os valores e o total.</option>";
    echo "</select>";
    echo "</form>"
    ?>

    <p><a href='../index.php' id="back">Voltar</a></p>
  </div>

  <img src="../assets/shopping-cart.png" id="carro-compra">

  <script src="../scripts/functions.js"></script>
  <footer id="rodape">
    <p>Copyright &copy; 2020 - by <a href="https://github.com/AllanCapistrano" target="_blank">Allan Capistrano</a></p>
  </footer>
</body>

</html>