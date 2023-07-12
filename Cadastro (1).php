<?php
if (isset($_REQUEST['submit'])) {
    include_once('conf.php');

    $nome = $_REQUEST['nome'];
    $cpf = $_REQUEST['cpf'];
    $data = $_REQUEST['data_nasc'];
    $passwd = $_REQUEST['passwd'];
    $email = $_REQUEST['email'];
    $ender = $_REQUEST['ender'];

    try {
        $sql = "INSERT INTO pessoa (nome, senha, CPF, email, endereco, data_nasc) VALUES (:nome, :passwd, :cpf, :email, :ender, :data)";
        $m = $pdo->prepare($sql);
        $m->bindParam(':nome', $nome);
        $m->bindParam(':passwd', $passwd);
        $m->bindParam(':cpf', $cpf);
        $m->bindParam(':email', $email);
        $m->bindParam(':ender', $ender);
        $m->bindParam(':data', $data);
        $m->execute();
        header('Location: Login.php');
    } catch (PDOException $er) {
        die("Erro: " . $er->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./css/stylo2.css">
</head>
<body>
    <section class="fot">
        <div class="img">
            <a href="./Home.php"><h1>Adote Patinhas</h1>
             <img src="./img/Shiba_Inu_-removebg-preview.png" alt="cachorrinho com placa" width="140%"> </a>
             <div class="circle"></div>
         </div>
         <div class="a">
            <div class="mov">
            <span><h1>Sign-Up</h1></span>
            <a href="./Login.php"><input type="button" value="Login"></a>
            <div class="alternativo">
                <span>OU</span>
            </div>
            <hr>
            </div>
            <div class="form">
            <form action="cadastro.php" method="post">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" autofocus placeholder="Nome" required>
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" placeholder="CPF" required>
                <label for="data_nasc">Data de nascimento</label>
                <input type="date" name="data_nasc" id="data_nasc" required>
                <label for="ender">Endereço</label>
                <input type="text" name="ender" id="ender" placeholder="Endereço" required>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="E-mail" required>
                <label for="passwd">Senha</label>
                <input type="password" name="passwd" id="passwd" placeholder="Senha"required>
                <input type="submit" value="Cadastrar" name="submit">
            </form>
            </div>
        </div>
    </section>
</body>
</html>