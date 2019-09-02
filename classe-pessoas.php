<?php

class Pessoa{

    private $pdo;

    public function __construct($dbname, $host, $use, $senha){
        try {
            $this->pdo = new PDO("myslq:dbname=".$dbname.";host=".$host,$user,$senha);
        } 
        catch (PDOException $e) {
            echo "Erro com banco de dados: ".$e->getMessage();
            exit(); //caso gere o erro irá parar o código aqui
        }
        catch(Exception $e){
            echo "Erro genérico: ".$e->getMessage();
            exit(); //caso gere o erro irá parar o código aqui
        }
    }

    //FUNÇÃO PARA BUSCAR DADOS E COLOCAR NO CANTO DIREITO
    public function buscarDados()
    {
        $res = array();//pra não gerar erros caso não retorne nada,caso esse banco de dados esteja vazio ele não vai dar nenhum erro, vai retornar um array vazio
        $cmd = $this->pdo->query("SELECT * FROM pessoa ORDER BY id DESC");
        $res = $cmd->fetchALL(PDO::FETCH_ASSOC);
        return $res;
    }
}
?>