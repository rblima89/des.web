
<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Coleta os dados
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $genero = $_POST["genero"];
    $biografia = $_POST["biografia"];
    $termos = isset($_POST["termos"]) ? "Aceitou" : "Não aceitou";

    // Monta o conteúdo a ser salvo
    $linha = "Nome: $nome\nEmail: $email\nSenha: $senha\nGênero: $genero\nBiografia: $biografia\nTermos: $termos\n---\n";

    // Salva no arquivo (adiciona ao final)
    file_put_contents("cadastros.txt", $linha, FILE_APPEND);

    // Confirma para o usuário
    echo "Cadastro salvo com sucesso!";
} else {
    echo "Acesso inválido.";
}
?>
