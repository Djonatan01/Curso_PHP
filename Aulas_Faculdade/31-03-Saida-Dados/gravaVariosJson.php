<?php
// Inicializa o array para armazenar os registros
$registros = array();

// Lê os dados enviados pelo formulário
if (isset($_POST['nome']) && isset($_POST['idade']) && isset($_POST['email'])) {
    // Cria um novo registro com os dados enviados
    $novo_registro = array(
        'nome' => $_POST['nome'],
        'idade' => $_POST['idade'],
        'email' => $_POST['email']
    );

    // Adiciona o novo registro ao array de registros
    $registros[] = $novo_registro;

    // Lê os registros existentes do arquivo JSON (se houver)
    if (file_exists('registros.json')) {
        $json = file_get_contents('registros.json');
        $registros_exist = json_decode($json, true);
        if (is_array($registros_exist)) {
            // Adiciona os registros existentes ao array de registros
            $registros = array_merge($registros_exist, $registros);
        }
    }

    // Converte o array de registros para JSON
    $json = json_encode($registros, JSON_PRETTY_PRINT);

    // Escreve o JSON no arquivo
    file_put_contents('registros.json', $json);

    echo"Arquivo gravado";
}
?>