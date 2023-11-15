<?php
function countVowels($str)
{
    // Converte a string para minúsculas para facilitar a comparação
    $str = strtolower($str);

    // Inicializa o contador de vogais
    $contadorVogais = 0;

    // Percorre cada caractere da string
    for ($i = 0; $i < strlen($str); $i++) {
        $caractere = $str[$i];

        // Verifica se o caractere é uma vogal
        if ($caractere == 'a' || $caractere == 'e' || $caractere == 'i' || $caractere == 'o' || $caractere == 'u') {
            // Incrementa o contador de vogais
            $contadorVogais++;
        }
    }

    // Retorna a quantidade total de vogais na string
    return $contadorVogais;
}

// Exemplo de uso
$stringExemplo = "Hello World";
$resultado = countVowels($stringExemplo);
echo "A quantidade de vogais na string \"$stringExemplo\" é: $resultado";
?>