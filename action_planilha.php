
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $url = "https://script.google.com/macros/s/AKfycbwFfHjTJxNLVEr7yP9yFuIPzU922B6v98yJnkLap-FYsZ8Yl0Eygze9a1D9pxn9StGzCPA/exec";

  $data = [
    "nome" => $_POST["nome"] ?? "",
    "email" => $_POST["email"] ?? "",
    "duvidas" => $_POST["duvidas"] ?? "",
    "sugestoes" => $_POST["sugestoes"] ?? "",
    "telefone" => $_POST["telefone"] ?? ""
  ];

  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec($ch);
  curl_close($ch);

  echo "<p>Dados enviados para a planilha com sucesso!</p>";
  echo "<pre>" . htmlspecialchars($response) . "</pre>";

} else {
  echo "<p>Nenhum dado foi enviado.</p>";
}
?>
