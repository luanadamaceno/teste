<?php 
$dbuser = 'root';
$dbpass = '';

try{
    $pdo = new PDO('mysql:Host=Localhost;dbname=ADOTE_PATINHAS',$dbuser,$dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $erro){
    die("erro na conexão!");
}
?>
