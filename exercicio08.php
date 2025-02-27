<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Percentual de votos</title>
</head>

<body>

    <h2>Percentual de votos</h2>

    <?php include('funcoes.php')
    ?>
    
    <form class ="form-control" method ="POST">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Eleitores:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="eleitores" placeholder="Eleitores">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Votos Brancos:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="brancos" placeholder="Votos Brancos">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Votos Nulos:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nulos" placeholder="Votos Nulos">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Votos Válidos:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="validos" placeholder="Votos Válidos">
        </div>
    

        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
            //coletando os numeros dos campos
            if(isset($_POST['eleitores']) && (isset($_POST['brancos'])) && (isset($_POST['nulos'])) && (isset($_POST['validos'])) && $_POST['eleitores'] != "" && $_POST['brancos'] != "" && $_POST['nulos'] != "" && $_POST['validos'] != ""){ 
                $eleitores = $_POST['eleitores'];
                $brancos = $_POST['brancos'];
                $nulos = $_POST['nulos'];
                $validos = $_POST['validos'];
            }
        
            ?>
        </button>
        <br><br>

    </form>

    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" readonly>
            <?php
                if(isset($_POST['eleitores']) && (isset($_POST['brancos'])) && (isset($_POST['nulos'])) && (isset($_POST['validos'])) && $_POST['eleitores'] != "" && $_POST['brancos'] != "" && $_POST['nulos'] != "" && $_POST['validos'] != ""){

                    if(($brancos + $validos + $nulos) == $eleitores){
                        echo "\nO percentual de votos brancos é: " .porcentagem($eleitores,$brancos). "% da quantidade total de eleitores";
                        echo "\nO percentual de votos nulos é: " .porcentagem($eleitores,$nulos). "% da quantidade total de eleitores";
                        echo "\nO percentual de votos validos é: " .porcentagem($eleitores,$validos). "% da quantidade total de eleitores";
                    }else if(($brancos + $validos + $nulos) < $eleitores || ($brancos + $validos + $nulos) > $eleitores){
                        echo "Digite números válidos de votos!"; 
                    }
                }    
                
            ?>
        </textarea>
    </div>
    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            


</body>
</html>