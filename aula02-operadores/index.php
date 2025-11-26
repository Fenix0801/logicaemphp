<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores</h1>
    <?php
         //operadores aritimeticos
            echo "<h2> Operadores Aritiméticos </h2>"; 
            $a = 5;
            $b = 3;
            $soma = $a + $b;
            $subtracao = 4 - 2;
            $multiplicacao = 4 * 3;
            $potenciacao = 2 ** 2;
            $divisao = $a / $b;
            $restodadivisao = $a % $b;
            
                echo"Resultado da soma é $soma <br>";
                echo"Resultado da subtração é $subtracao <br>";
                echo"Resultado da multiplicação é $multiplicacao <br>";
                echo"Resultado da potenciação é $potenciacao <br>";
                echo"Resultado da divisão é $divisao <br>";
                echo"Resultado do resto da divisão de $a e $b é $restodadivisao <br>";

        //operadores de atribuição
            echo "<br>";
            echo "<h2> Operadores de Atribuição </h2>";
        
            $rua = "Rua Amador Bueno";
            $rua .= " na Cidade de São Paulo";

            $preco = 2.45;
            $preco += 2.30;
            $preco -= 1.30;

            //Formata o número para usar a vírgula como separador decimal
            $preco_formatado = number_format($preco, 2, ',', '.');

            //Exibe o resultado
            echo "$rua, <br> Preço R$ $preco_formatado <br>";

        //operadores de comparação
            echo "<br>";
            echo "<h2> Operadores de Comparação </h2>";

            $c = 10;
            $d = "10";

            echo"<h3> Comparação de igualdade </h3>";
            echo($c == $d) ? "São iguais." : "Não são iguais.";
            echo "<br>";
            echo($c === $d) ? "São estritatmente iguais." : "Não são estritamente iguais.";

            echo"<br> <h3> Comparação de diferença </h3>";
            echo($c != $d) ? "São diferentes." : "Não são diferentes.";
            echo "<br>";
            echo($c !== $d) ? "São estritamente diferentes." : "Não são estritamente diferentes.";

            $teste = false;
            echo"<br> <h3> Negação </h3>";
            echo(!$teste) ? "É verdadeiro." : "É falso";

            $e = 5;
            $f = 3;
            echo"<br> <h3> Maior que e Menor que </h3>";
            echo($e > $f) ? "E é maior que F." : "E não é maior que F.";
            echo"<br>";
            echo($e < $f) ? "E é menor que F." : "E não é menor que F.";
            
            $h = 4;
            $i = 4;
            $j = 2;
            echo"<h3> Maior ou Igual a, Menor ou Igual a </h3>";
            echo($h >= $i) ? "H é maior ou igual a I" : "H não é maior ou igual a I";
            echo"<br>";
            echo($i <= $j) ? "I é menor ou igual a J" : "I não é menor ou igual a J";

        //Operadores Lógicos
            echo"<h2> Operadores Lógicos </h2>";
            $idade = 20;
            $tem_cnh = true;
            echo($idade >= 18 and $tem_cnh) ? "Você pode dirigir." : "Você não pode dirigir.";
            echo"<br>";

            $tem_ingresso = false;
            $tem_convitevip = true;
            echo($tem_ingresso or $tem_convitevip) ? "Você pode entrar na festa." : "Você não pode entrar na festa.";
            echo"<br>";

            //&& para end e || para or
                $sol = true;
                $sem_chuva = false;
                $feriado = true;
                echo($sol && $sem_chuva || $feriado) ? "Você pode sair para passear." : "Melhor ficar em casa";

            


    ?>
</body>

</html>