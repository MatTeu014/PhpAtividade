<?php //tag php

    //ide compila comandos das linguagens em linguagem de maquina(0 ou 1)
    //linguagem de alto nivel sao linguagens que sao mais proxima do ser humano como esta
    //linguagens de baixo nivel sao linguagens mais proximas da linguagem de maquina


    $num1 = 0; //Instanciar uma variavel
    $num2 = 0;
    $num3 = 0;
    $num4 = 0;
    $num5 = 0;
    $num6 = 0;
    $num7 = 0;
    $num8 = 0;
    $num9 = 0;
    $num10 = 0;
    $total = 0;
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

    $anos = 0;
    $meses = 0;
    $dias = 0;
    
    $macas = 0;

    $conta = 0;
    $saldo = 0;
    $debito = 0;
    $credito = 0;

    $valorN;

    

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

    function porcentagem($num1,$num2){        
        return ($num2 * 100) / $num1;       

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

    function idade($anos,$meses,$dias){
        return ($anos * 365) + ($meses * 30) + $dias;
    }

    function macas($macas){
        if($macas <= 11){
            return $macas * 1.3;
        }else if($macas >= 12){
            return $macas * 1;
        }
    }

    function salariofinal($salarioFixo,$valorVenda){
        if($valorVenda <= 1500){
            return $valorVenda * 0.03 + $salarioFixo;
        }else{
            return $valorVenda * 0.0815 + $salarioFixo;
        }
    }

    function saldo($conta,$saldo,$debito,$credito){
        return $saldo - $debito + $credito;
        
    }

    function tabuada($num1,$num2){
        for($i = 1; $i <= 10; $i++){
            $num2 .= "-" . $num1 * $i;
        }
        return $num2;
    }


    function valorN($num1,$valorN){
        
        for($i = 2; $i < $num1; $i++){  
            $valorN .= $i . " ";
        }
        return $valorN;
    }

    function numeroNegativo($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10,$total){
       if($num1 < 0){
        $total .= "/" . $num1;
       }
       if($num2 < 0){
        $total .= $num2;
       }
       if($num3 < 0){
        $total .= $num3;
       }
       if($num4 < 0){
        $total .= $num4;
       }
       if($num5 < 0){
        $total .= $num5;
       }
       if($num6 < 0){
        $total .= $num6;
       }
       if($num7 < 0){
        $total .= $num7;
       }
       if($num8 < 0){
        $total .= $num8;
       }
       if($num9 < 0){
        $total .= $num9;
       }
       if($num10 < 0){
        $total .= $num10;
       }
       return $total;
    }
    

    function menorquarenta($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10,$total){
        if($num1 < 40){
            $total += $num1;            
        }
        if($num2 < 40){
            $total += $num2;
        }
        if($num3 < 40){
            $total += $num3;
        }
        if($num4 < 40){
            $total += $num4;
        }
        if($num5 < 40){
            $total += $num5;
        }
        if($num6 < 40){
            $total += $num6;
        }
        if($num7 < 40){
            $total += $num7;
        }
        if($num8 < 40){
            $total += $num8;
        }
        if($num9 < 40){
            $total += $num9;
        }
        if($num10 < 40){
            $total += $num10;
        }
        return $total;
    }
    
    
?>

