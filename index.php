<?
require_once 'classe-pessoa.php';
$p = new Pessoa("crudpdo","localhost","root","");//passar os parametros na classe.
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Pessoa</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
    <section id="esquerda">
        <form>
            <h2>CADASTRAR PESSOA</h2>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email">

            <input type="submit" value="cadastrar">
        </form>
    </section>
    <section id="direita">
        <table>
            <tr id="titulo"> 
                <td>Nome</td>
                <td>Telefone</td>
                <td colspan="2">Email</td>
            </tr>
           
            <?php
            $dados = $p->buscarDados(); //busca o método
            if(count($dados) > 0)
            {
                for($i=0; $i < count($dados); $i++){
                    echo "<tr>";
                    foreach ($dados[$i] as $k => $v)
                    {
                        if($k != "id")
                        {
                            echo "<td>".$v."</td>";
                        }
                    }
                    echo "</tr>";
                }
            ?>
                <td><a href="">Editar</a><a href="">Excluir</a></td><!-- -->
            <?php
            }
            ?>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
        </table>

    </section>
</body>
</html>