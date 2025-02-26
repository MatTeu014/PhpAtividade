<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Salário Final do Vendedor</title>
</head>

<body>

    <h2>Salário Final do Vendedor</h2>

    <?php include('funcoes.php')
    ?>
    
    <form class ="form-control" method ="POST">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Número de Carros vendidos:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="carroVendido" placeholder="Número de Carros vendidos:">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Valor total de vendas:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="valorTotal" placeholder="Valor total de vendas:">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário fixo:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="salarioFixo" placeholder="Salário fixo:">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Valor que recebe por carro vendido:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="valorVenda" placeholder="Valor que recebe por carro vendido:">
        </div>

    
        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
            //coletando os numeros dos campos
            if(isset($_POST['carroVendido']) && (isset($_POST['valorTotal'])) && (isset($_POST['salarioFixo'])) && (isset($_POST['valorVenda'])) && $_POST['carroVendido'] != "" && $_POST['valorTotal'] != "" && $_POST['salarioFixo'] != "" && $_POST['valorVenda'] != ""){  
                $numeroCarros = $_POST['carroVendido'];
                $valorTotal = $_POST['valorTotal'];
                $salarioFixo = $_POST['salarioFixo'];
                $valorVenda = $_POST['valorVenda'];
            }
            
            ?>
        </button>
        <br><br>

    </form>

    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" readonly>
            <?php
            if(isset($_POST['carroVendido']) && (isset($_POST['valorTotal'])) && (isset($_POST['salarioFixo'])) && (isset($_POST['valorVenda'])) && $_POST['carroVendido'] != "" && $_POST['valorTotal'] != "" && $_POST['salarioFixo'] != "" && $_POST['valorVenda'] != ""){ 
                echo "O salário final do vendedor é: R$" . salarioVendedor($numeroCarros,$valorTotal,$salarioFixo,$valorVenda);
                 
            }
            ?>
        </textarea>
    </div>

    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            


</body>
</html>