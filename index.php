<?php
    // Declaração de variáveis com tipos diferentes
    $var1 = 42;       // Tipo: inteiro
    $var2 = "Olá";    // Tipo: string
    $var3 = 3.14;     // Tipo: float

    // Função para verificar o tipo e apresentar a mensagem correspondente
    function verificarTipo($var) {
        if (is_int($var)) {
            echo "A variável é do tipo inteiro. <br>";
        } else {
            echo "A variável não é do tipo inteiro. <br>";
        }
    }

    // Verifica o tipo das variáveis
    verificarTipo($var1);
    verificarTipo($var2);
    verificarTipo($var3);
?>