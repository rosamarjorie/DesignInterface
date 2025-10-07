<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 https://script.google.com/macros/s/AKfycbw4jFJDVac5E3A7MO_YTYVHMq0rYXZ6CKi1USPANTvzDj3PB9tzaqBMnK7bR2_6KkMaww/exec
    // Dados do formulário
    $data = [
        "nome" => $_POST["nome"] ?? "",
        "email" => $_POST["email"] ?? "",
        "mensagem" => $_POST["mensagem"] ?? ""
        // Adicione outros campos conforme necessário
    ];

    // Inicializa cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    echo "<p>Dados enviados para a planilha com sucesso!</p>";
    echo "<pre>".htmlspecialchars($response)."</pre>";

} else {
    echo "<p>Nenhum dado foi enviado.</p>";
}
?>

