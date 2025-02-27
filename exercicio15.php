<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>exercício15</title>
</head>

<body>

    <h2>Saldo Atual do Cliente</h2>

    <?php include('funcoes.php')
    ?>
    
    <form class ="form-control" method ="POST">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Número da conta</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="conta" placeholder="Número da Conta">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Saldo Atual:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="saldo" placeholder="Saldo Atual">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Débito:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="debito" placeholder="Débito">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Crédito:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="credito" placeholder="Crédito">
        </div>

        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
            //coletando os numeros dos campos
            if(isset($_POST['conta']) && isset($_POST['saldo']) && isset($_POST['debito']) && isset($_POST['credito']) && $_POST['conta'] != "" && $_POST['saldo'] != "" && $_POST['debito'] != "" && $_POST['credito'] != "" ){  
                $conta = $_POST['conta'];
                $saldo = $_POST['saldo'];
                $debito = $_POST['debito'];
                $credito = $_POST['credito'];
            }
            
            ?>
        </button>
        <br><br>

    </form>

    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" readonly>
            <?php
            if(isset($_POST['conta']) && isset($_POST['saldo']) && isset($_POST['debito']) && isset($_POST['credito']) && $_POST['conta'] != "" && $_POST['saldo'] != "" && $_POST['debito'] != "" && $_POST['credito'] != "" ){ 
                if(saldo($conta,$saldo,$debito,$credito) >= 0){
                    echo "\nO saldo atual do cliente é: R$" . saldo($conta,$saldo,$debito,$credito);
                    echo "\nSaldo Positivo!";
                }else if(saldo($conta,$saldo,$debito,$credito) < 0){
                    echo "\nO saldo atual do cliente é: R$" . saldo($conta,$saldo,$debito,$credito);
                    echo "\nSaldo Negativo!";
                }
                 
            }
            ?>
        </textarea>
    </div>

    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            


</body>
</html>