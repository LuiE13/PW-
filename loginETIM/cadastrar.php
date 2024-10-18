<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Usuarios</title>
    <link rel="stylesheet" href="css/estilo.css">
    
</head>
<body>
    <section>
        <div>
            <form action="" method = "post">
                <input type="text" name="nome" placeholder="Informe seu nome">
                <input type="text" name="email" placeholder="Informe seu email">
                <input type="password" name="senha" placeholder="Informe sua senha"><br>
                
                <input type="submit" name="login" value="Fazer Login">
                <input type="submit" name="cadastrar" value="Cadastrar">
            </form>
        </div>
    </section>   
</body>
</html>

<?php
session_start();

include 'Contato.class.php';
$contato = new Contato();


if( isset($_POST['cadastrar'])){ 
    
    $nome  = $_POST['nome' ];
    $email = $_POST['email' ];
    $senha = $_POST['senha' ];

    $dados = $contato->checkUser($_POST['email']);
    if( !empty($dados)){
        echo "
        <script>
            alert('Usuario ja cadastrado')
        </script>";
    

}else{
    $contato->insertUser($nome, $email, $senha);
    echo "
     <script>
            alert('Usuario cadastrado com sucesso!')
        </script>";
}

}else if(isset($_POST['login']) ){       

    $nome  = $_POST['nome' ];
    $email = $_POST['email' ];
    $senha = $_POST['senha' ];
    $dados = $contato->checkUserPass($email, $senha);
    if( !empty ( $dados ) ){
        $_SESSION['nome'] = $dados['nome'];
    header("location:index.php");
    }

}