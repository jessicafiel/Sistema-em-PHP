<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "busca_livros";

    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result_livros = "SELECT * FROM livro WHERE nome LIKE '%$pesquisar%'";
    $resultado_livros = mysqli_query($conn, $result_livros);
    
    while($rows_livros = mysqli_fetch_array($resultado_livros)){
        echo "Nome do livro: ".$rows_livros['nome']."<br>";
    }
?>

