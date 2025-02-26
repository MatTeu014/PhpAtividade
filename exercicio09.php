<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Reajuste de Salário</title>
</head>

<body>

    <h2>Reajuste de Salário</h2>

    <?php include('funcoes.php')
    ?>
    
    <form class ="form-control" method ="POST">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário Mensal:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="salario" placeholder="Salário Mensal">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Percentual de Reajuste</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="reajuste" placeholder="Percentual de Reajuste">
        </div>
    
        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
            //coletando os numeros dos campos
            if(isset($_POST['salario']) && (isset($_POST['reajuste'])) && $_POST['salario'] != "" && $_POST['reajuste'] != ""){ 
                $salario = $_POST['salario'];
                $reajuste = $_POST['reajuste'];
            }
            ?>
        </button>
        <br><br>

    </form>

    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" readonly>
            <?php
                if(isset($_POST['salario']) && (isset($_POST['reajuste'])) && $_POST['salario'] != "" && $_POST['reajuste'] != ""){
                    if($salario == "" || $reajuste == ""){
                        echo "Preencha os campos!";

                    }else{
                        echo "O valor do salário depois do reajuste será: R$" .salario($salario,$reajuste);
                        
                    }
                }
            ?>
        </textarea>
    </div>
    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            


</body>
</html>