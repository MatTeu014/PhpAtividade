<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>exercício19</title>
</head>

<body>

    <h2>Soma de Número Menores que 40</h2>

    <?php include('funcoes.php')
    ?>
    
    <form class ="form-control" method ="POST">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Primeiro Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero1" placeholder="Primeiro Número">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Segundo Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero2" placeholder="Segundo Número">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Terceiro Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero3" placeholder="Terceiro Número">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quarto Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero4" placeholder="Quarto Número">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quinto Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero5" placeholder="Quinto Número">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Sexto Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero6" placeholder="Sexto Número">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Sétimo Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero7" placeholder="Sétimo Número">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Oitavo Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero8" placeholder="Oitavo Número">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nono Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero9" placeholder="Nono Número">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Décimo Número:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero10" placeholder="Décimo Número">
        </div>
 

        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
            //coletando os numeros dos campos
            
                $num1 = $_POST['numero1'];
                $num2 = $_POST['numero2'];
                $num3 = $_POST['numero3'];
                $num4 = $_POST['numero4'];
                $num5 = $_POST['numero5'];
                $num6 = $_POST['numero6'];
                $num7 = $_POST['numero7'];
                $num8 = $_POST['numero8'];
                $num9 = $_POST['numero9'];
                $num10 = $_POST['numero10'];
                
            
            
            ?>
        </button>
        <br><br>

    </form>

    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" readonly>
            <?php
            
                
                echo "\nA soma do númersos menores que 40 é: " . menorquarenta($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10,$total);
                              
            
            ?>
        </textarea>
    </div>

    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            


</body>
</html>