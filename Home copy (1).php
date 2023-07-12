<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/stylo4.css">
</head>
<body>
    <nav class="nav-bar">
        <a href="./Home.php"><img src="./img/icon.png" alt="Patinhas" width="40px"></a>
        <a href="./Home.php" id="tilz"><span>Adote Patinhas</span></a>
        <ul>
            <li><a href="./Home.php">Home</a></li>
            <li><a href="./sobre.php">Sobre</a></li>
            <li><a href="#cont">Contato</a></li>
        </ul>
        <div class="ab">
        <a href="./Login.php"><input type="button" value="Entrar"></a>
        <a href="./Cadastro.php"><input type="button" value="Cadastre-se"></a>
        </div>
    </nav>
    <figure id="carossel">
    </figure>
    <section class="conteiner">
        <section class="filtro">
            <label for="tipo">Espécie</label>
            <select name="tipo">
                <option>Gato</option>
                <option>Cachorro</option>
                <option>Roedores</option>
            </select>
            <hr>
            <label for="porte">Porte</label>
            <select name="porte">
                <option>Grande</option>
                <option>Médio</option>
                <option>Pequeno</option>
            </select>
            <hr>
            <label for="idade">Idade</label>
            <select name="idade">
                <option>0 a 6 meses(Filhote)</option>
                <option>7 meses a 5 anos(Jovem)</option>
                <option>6 a 10 anos(Adulto)</option>
            </select>
            <hr>
            <div id="mtt">
            <label for="macho">Macho</label>
            <input type="checkbox" name="macho">
            <label for="femea">Femea</label>
            <input type="checkbox" name="femea">
            </div>
            <input type="button" value="Selecionar">
        </section>
        <section class="lugar">
            <div class="posit">
                <div class="card">
                    <figure>
                    <img src="./img/lilica.jpeg" alt="o"width="100%">
                    </figure>
                    <div class="detz">
                            <h3>Nome: Lilica<br>
                                Porte: Pequeno<br>
                                Idade: 5 anos<br>
                                Sexo: Fêmea</h3><br>
                            <input type="button" value="Escolher">
                    </div>
                </div>
                <div class="card">
                    <figure>
                    <img src="./img/marcha.jpeg" alt="//" width="100%">
                    </figure>
                    <div class="detz">
                        <h3>Nome: Marcha<br>
                            Porte: Pequeno<br>
                            Idade: 2 meses<br>
                            Sexo: Fêmea</h3><br>
                        <input type="button" value="Escolher">
                </div>
                </div>
            </div>
            <div class="posit">
                <div class="card">
                    <figure>
                    <img src="./img/caramelo (2).jpeg" alt="//" width="100%">
                    </figure>
                    <div class="detz">
                        <h3>Nome: Caramelo<br>
                            Porte: Grande<br>
                            Idade: 1 ano<br>
                            Sexo: Macho</h3><br>
                        <input type="button" value="Escolher">
                </div>
                </div>
                <div class="card">
                    <figure>
                    <img src="./img/fred.jpeg" alt="//" width="100%" height="100%">
                    </figure>
                    <div class="detz">
                        <h3>Nome: Fred<br>
                            Porte: Pequeno<br>
                            Idade: 3 anos<br>
                            Sexo: Macho</h3><br>
                        <input type="button" value="Escolher">
                </div>
                </div>
            </div>
            
        </section>
    </section>
    <footer class="baixo">
        <ol>
            <li><h2>Contatos</h2></li>
            <li>Reservado para alguma coisa</li>
            <li>Reservado para alguma coisa</li>
            <li>Reservado para alguma coisa</li>
        </ol>
        <div class="icon_estacio" id="cont">
            <img src="./img/estacio icon.png" alt="estacio icon" width="60px" height="50px">
        </div>
    </footer>
</body>
</html>