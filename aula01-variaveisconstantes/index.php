<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro PHP</title>
</head>
<body>
    <h2>
    <?php
        echo "Meu primeiro PHP \u{1F600}";
        echo "<br>  <br>";

        //Variaveis
        $nome = "Ana";
        $sobrenome = "Cunha";

        //A variável pode ser mudada
        $nome = "Ana Claudia";
        echo "Seja bem-vindo, $nome $sobrenome";

        echo "<br>  <br>";

    const time = "Corinthians";
    echo "Meu time de futebol é " . time;

    echo "<br>  <br>";

    //Tipos de dados
    $sobrenome2 = "Albuquerque"; //string
    $idade = 45; //int
    $peso = 85.7; //float
    $casado = false; //booleano

    echo "$sobrenome $idade $peso";
echo "<br>  <br>";

    //Método 1: Usado var_dump para exibir o valor do booleano
    var_dump($casado);
echo "<br>  <br>";

    //Método 2: Usando uma conversão para string
    echo($casado ? "Casado" : "Não é casado");
    echo "<br>  <br>";
    var_dump($sobrenome);
    echo "<br>";
    var_dump($idade);
    echo "<br>";
    var_dump($peso);
    echo "<br>  <br>";

    $frase = "Meu time de futebol é " .time;
    $frase2 = "Meu nome é $nome meu sobrenome é $sobrenome";
    echo($frase);
    echo "<br>";
    echo($frase2);




    ?>

    </h2>
    <p>Meu primeiro parágrafo</p>

</body>
</html> 