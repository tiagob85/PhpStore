<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2 style="text-align: center">Cadastro de marca</h2> 
    <h3><a href="admin.php">Admin</a></h3>   
    <h2>Cadastros</h2>
       <ul style="list-style-type:none;">
            <li><a href="">Produtos</a></li>            
            <li><a href="">Fornecedores</a></li>
            <li><a href="cadmarca.php">Marca</a></li>
            <li><a href="cadsecao.php">Seçao</a></li>
            <li><a href="">Visualizar informaçoes</a></li>
       </ul>    
    <form method="post" action="lojacontroller.php?acao=insmarca">
        <table>
            <tr>
                <td><label>Nome : </label> <input type="text" name="nome" size="60"  /></td>
                <td><button>Gravar</button></td>
            </tr>
        </table>
    </form> 
</body>
</html>