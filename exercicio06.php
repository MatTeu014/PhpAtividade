<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Número antecessor</title>
</head>

<body>

    <h2>Número antecessor</h2>

    <?php include('funcoes.php')
    ?>
    
    <form class ="form-control" method ="POST">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero" placeholder="Número">
        </div>
    

        <br><br>
        <button type="submit" class="btn btn-primary">Pesquisar
            <?php
            //coletando os numeros dos campos
            if(isset($_POST['numero']) && $_POST['numero'] != ""){ 
                $num1 = $_POST['numero'];
            }
            ?>
        </button>
        <br><br>

    </form>

    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" readonly>
            <?php
                if(isset($_POST['numero']) && $_POST['numero'] != ""){
                    if($num1 == ""){
                        echo "Preencha o campo!";
                    }else{
                        echo "O número antecessor à esse é: " .antecessor($num1);
                    }
                }
            ?>
        </textarea>
    </div>
    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            


</body>
</html>