<?php //tag php

    //ide compila comandos das linguagens em linguagem de maquina(0 ou 1)
    //linguagem de alto nivel sao linguagens que sao mais proxima do ser humano como esta
    //linguagens de baixo nivel sao linguagens mais proximas da linguagem de maquina


    $num1 = 0; //Instanciar uma variavel
    $num2 = 0;
    $num3 = 0;
    $cor = "";

    $eleitores = 0;
    $brancos = 0;
    $nulos = 0;
    $validos = 0;

    $salario = 0;
    $reajuste = 0;

    $custoFabrica = 0;

    $numeroCarros = 0;
    $valorTotal = 0;
    $salarioFixo = 0;
    $valorVenda = 0;
    
    

    function somar($num1,$num2){ //$num1 e $num2 são parametros e function é um metodo
        return $num1 + $num2;

    } //fim do metodo

    function subtrair($num1,$num2){
        return $num1 - $num2;
    } //fim do metodo

    function dividir($num1,$num2){
        if($num2 <= 0){
            return "Impossível dividir por zero!";
        }else{
            return $num1/$num2;
        }
    }//fim de metodo
    
    function multiplicar($num1,$num2){
        return $num1 * $num2;
    }//fim de metodo    


    function media($num1,$num2){
        return ($num1 + $num2) / 2;
    }

    function maiorNumero($num1,$num2){
        if($num1 > $num2){
            return "O maior número é: " . $num1;
        }else if($num1 == $num2){
            return "Os números são iguais";
        }else{
            return "O maior número é: " . $num2;
        }
    }

    function mediaAritmetica($num1,$num2,$num3){
        return($num1 + $num2 + $num3)/3;   
    }

    function antecessor($num1){
        return($num1 - 1);
    }

    function areaRetangulo($num1,$num2){
        return $num1 * $num2;
    }

    function brancos($eleitores,$brancos){
        return ($brancos * 100) / $eleitores;
    }
    function nulos($eleitores,$nulos){
        return ($nulos * 100) / $eleitores;
    }
    function validos($eleitores,$validos){
        return ($validos * 100) / $eleitores;
    }

    function salario($salario,$reajuste){
        return (($reajuste / 100) * $salario + $salario);
    }

    //para descobrir o calculo: primeiramente eu descobri qual era o resultado de 28% e 45% de um valor inicial qualquer como por exemplo 100, independentemente da ordem, o resultado sera o mesmo, no caso 185.6, entao se eu quiser descobrir quanto é 28% e 45% de outro valor eu tenho que descobrir quanto que vale 85.6% daquele valor e somar com ele.
    function custoCarro($custoFabrica){
        return (($custoFabrica * 0.856) + $custoFabrica);
    }

    function salarioVendedor($numeroCarros,$valorTotal,$salarioFixo,$valorVenda){
        return ($valorTotal * 0.05) + $salarioFixo + ($numeroCarros * $valorVenda);
    }               

?>

