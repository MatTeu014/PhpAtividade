<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>exercício14</title>
</head>

<body>

    <h2>Salário Total do Vendedor</h2>

    <?php include('funcoes.php')
    ?>
    
    <form class ="form-control" method ="POST">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário Fixo:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="salarioFixo" placeholder="Salário Fixo">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Valor das Vendas:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="valorVendas" placeholder="Valor das Vendas">
        </div>

        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
            //coletando os numeros dos campos
            if(isset($_POST['salarioFixo']) && isset($_POST['valorVendas']) && $_POST['salarioFixo'] != "" && $_POST['valorVendas'] != ""){  
                $salariofixo = $_POST['salarioFixo'];
                $valorvenda = $_POST['valorVendas'];
                
            }
            
            ?>
        </button>
        <br><br>

    </form>

    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" readonly>
            <?php
            if(isset($_POST['salarioFixo']) && isset($_POST['valorVendas']) && $_POST['salarioFixo'] != "" && $_POST['valorVendas'] != ""){ 
                echo "O salário final do vendedor é: R$" . salariofinal($salariofixo,$valorvenda);
                 
            }
            ?>
        </textarea>
    </div>

    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            


</body>
</html>