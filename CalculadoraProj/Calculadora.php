<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Calculadora</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">

    
</head>
<body background="fundo.img">
  <div class="calc">
      <h1>CALCULADORA</h1>
      <form action="" method="GET">
          <input type="number" name="n01" id="n01" placeholder="Insira o 1° número:">
          <input type="number" name="n02" id="n02" placeholder="Insira o 2° número:">
          <div class="botoes">
              <button type="submit" name="operacao" value="soma">+</button>
              <button type="submit" name="operacao" value="subtracao">-</button>
              <button type="submit" name="operacao" value="multiplicacao">*</button>
              <button type="submit" name="operacao" value="divisao">÷</button>
          </div>
      </form>
      <div id="resultado">
          <h3>Resultado</h3>

          <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
              if (isset($_GET['operacao']) && isset($_GET['n01']) && isset($_GET['n02'])) {
            
              $n1 = $_GET["n01"];
              $n2 = $_GET["n02"];
              $operacao = $_GET["operacao"];

              if ($operacao == "soma") {
                // "." para juntar PHP com HTML
                $resultado = $n1 + $n2;
                echo "<span>$resultado</span>";
                // header("Location: ".$_SERVER['PHP_SELF']."?n1=$n1&n2=$n2&operacao=$operacao&resultado=$resultado");
          
              } 
              else
                if ($operacao == "subtracao") {
                  $resultado = $n1 - $n2;
                  echo "<span>$resultado</span>";
                } 
                else
                  if ($operacao == "multiplicacao") {
                  $resultado = $n1 * $n2;
                  echo "<span>$resultado</span>";
                  } 
                  else
                    if ($operacao == "divisao") {
                      if ($n2 != 0) {
                        $resultado = $n1 / $n2;
                        echo "<span>$resultado</span>";
                      } 
                      else {
                      echo "<span>Erro: Divisão por zero</span>";
                      }
                    }
                      
                  }
            }
          ?>
      </div>
  </div>
</body>
</html>
