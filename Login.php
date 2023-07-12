<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/stylo.css">
    <style>
        #sobrelink{
            padding: 10px;
            margin-left: 20px;
            font-family: poppins,sans-serif;
            transition: .3s ease-in-out;
            font-weight: 500;
        }
        #sobrelink:hover{
            color: rgb(20, 157, 255);
        }
    </style>
</head>
<body>
    <a href="./sobre.php" id="sobrelink">Sobre</a>
    <section class="fot">
        <div class="img">
           <a href="./Home.php"><h1>Adote Patinhas</h1>
            <img src="./img/catdab.png" alt="gatinho fazendo dabby" width="49%"> </a>
            <div class="circle"></div>
        </div>
        <div class="a">
            <span><h1>Login</h1></span>
            <a href="./Cadastro.php"><input type="button" value="Cadastre-se"></a>
            <div class="alternativo">
                <span>OU</span>
            </div>
            <hr>
            <form action="login_pdo.php" method="POST">
                <label for="email" name="email">E-mail</label>
                <input type="email" name="email" id="email" autofocus required placeholder="Digite seu E-mail">
                <label for="passwd" name="passwd">Senha</label>
                <input type="password" name="passwd" id="passwd" required placeholder="Digite sua senha">
                <input type="submit" value="Entrar" name="submit">
            </form>
        </div>
    </section>
</body>
</html>