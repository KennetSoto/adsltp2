<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Sequenciaaa</h1>
    <form action="index.php" method="GET">
        <label for="numero">Selecione o valor inicial</label>
        <select name="numero" id="numero">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        </select>
        <br>
    
        <label for="numero2">Selecione o valor final</label>
        <select name="numero2" id="numero2">
        <option value="98">98</option>
        <option value="99">99</option>
        <option value="100">100</option>
        </select>
        <br>
        
        <h1>Mostrar</h1>
        <input type= "radio" name="Todos" value="Todos">
        <label for="Todos">Todos</label><br>
        <input type= "radio" name="pares" value="Apenas Pares">
        <label for="Apenas Pares"> Apenas Pares</label><br>
        <input type= "radio" name="impares" value="Apenas Impares">
        <label for="Apenas Impares"> Apenas Impares</label><br>
        <input type="submit" value="Mostrar sequencia"><br>
      
    </form>
    
      <?php
       include_once 'sequencia.php'; 
              $sequencia = new sequencia();
              $sequencia->setInicio($_GET['numero']);
              $sequencia->setFim($_GET['numero2']);
              if (isset($_GET['Todos'])){
                $sequencia->exibirTodos();
              }if (isset($_GET['pares'])){
                $sequencia->exibirPares();
              }if(isset($_GET['impares'])){
                $sequencia->exibirImpares();
              }
      ?>

<!- varivel somente apos clicar no ->
    
</body>
</html>