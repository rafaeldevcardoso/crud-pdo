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
//$var_pdo->query("INSERT INTO pessoa(nome, telefone, email) VALUES ('Zeca','51515151','zeca@gmail.com')");

//--------------------------DELETE E UPDATE--------------------------
//DELETAR
/*
$comando = $var_pdo->prepare("DELETE FROM pessoa WHERE id = :id");
$id = 3;
$comando->bindValue(":id",$id);
$comando->execute();
*/
//ou

//$comando = $var_pdo->query("DELETE FROM pessoa WHERE id = 3");

//ATUALIZAR
//$comando = $var_pdo->prepare("UPDATE pessoa SET email = :mail WHERE id = :id");
//$comando->bindValue(":mail","rafael@gmail.com");
//$comando->bindValue(":id",1);
//$comando->execute();
//ou

//$comando = $var_pdo->query("UPDATE pessoa SET email = 'Zeca2@gmail.com' WHERE id = '2'");

//--------------------------SELECT--------------------------

$comando = $var_pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
$comando->bindValue(":id",1);
$comando->execute();
$resultado = $comando->fetch(PDO::FETCH_ASSOC);// fetch pega a informação do SELECT que vem do banco de dados e transforma num array, existe o fetchAll que é para todos as linhas, nesse caso basta tirar o WHERE
/*
echo "<pre>";
print_r($resultado);//print_r significaria "mostre o array"
echo "</pre>";
*/

foreach ($resultado as $key => $value){
    echo $key.": ".$value."<br>";
}//as funções 'print_r' e 'var_dump' servem para o programador fazer os testes, pra exibir na tela o mais correto e usar o 'foreach'

//sobre o PDO::FETCH_ASSOC - serve para traser apenas os nomes das colunas do banco dados,poupando memória.

?>