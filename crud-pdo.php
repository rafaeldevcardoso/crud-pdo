<?php
//--------------------------CONEXAO--------------------------
try {
                    //tipo do SQL, nome do banco, usuario e senha
$var_pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");

} 
catch (PDOException $e) {
    echo "Erro com banco de dados: ".$e->getMessage();
}
catch (Exception $e){
    echo "Erro!!: ".$e->getMessage();
}

//--------------------------INSERT--------------------------



?>