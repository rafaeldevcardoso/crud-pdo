<?php
//--------------------------CONEXAO--------------------------
try {
                    //tipo do SQL, nome do banco, usuario e senha
$var_pdo = new PDO("mysql:dbname=crudpdo;host=localhost","root","");//ligação com o banco

} 
catch (PDOException $e) {
    echo "Erro com banco de dados: ".$e->getMessage();
}
catch (Exception $e){
    echo "Erro!!: ".$e->getMessage();
}

//--------------------------INSERT--------------------------
//1 forma: é a mais utilizada.
//                    id é auto increment então não precisa ser posto
//$res = $var_pdo->prepare("INSERT INTO pessoa(nome, telefone, email) VALUES (:nom, :tel, :mail)");
//$res->bindValue(":nom","Rafael");
//$res->bindValue(":tel","99999999");
//$res->bindValue(":mail","teste@gmail.com");
//$res->execute();

//2 forma:
$var_pdo->query("INSERT INTO pessoa(nome, telefone, email) VALUES ('Zeca','51515151','zeca@gmail.com')");



?>