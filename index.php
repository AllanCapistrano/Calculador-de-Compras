<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./style/style.css">
  <link rel="stylesheet" href="./style/style_indexPage.css">
  <title>Calculador de Compras</title>
</head>
<body>
  <h1>Calculador de compras</h1>
  <div id="interface">
    <form method="POST" action="./src/form.php" onsubmit="return false">
      <section>
        <h3>Fez compras para quantas pessoas?</h3>
        <select name="qtd-pessoas" id="iqtd-pessoas" onchange="this.form.submit()">
          <option value="" selected></option>
          <?php
            for($i=1; $i <=10; $i++){
              echo "<option value='$i'>$i</option>";
            }
          ?>
        </select>
      </section>
    </form>
    <img src="./assets/shopping-cart.png" id="carro-compra">
  </div>

  <script src="./scripts/functions.js"></script>
  <footer id="rodape">
    <p>Copyright &copy; 2020 - by <a href="https://github.com/AllanCapistrano" target="_blank">Allan Capistrano</a></p>
  </footer>
</body>
</html>