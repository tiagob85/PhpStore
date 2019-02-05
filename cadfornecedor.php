<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin</title>
    </head>
    <body>
        <h2 style="text-align: center">Cadastro de fornecedores</h2> 
        <h3><a href="admin.php">Admin</a></h3>   
        <h2>Cadastros</h2>
        <ul style="list-style-type:none;">
            <li><a href="">Produtos</a></li>            
            <li><a href="">Fornecedores</a></li>
            <li><a href="cadmarca.php">Marca</a></li>
            <li><a href="cadsecao.php">Seçao</a></li>
            <li><a href="">Visualizar informaçoes</a></li>
        </ul>        
        <form method="post" action="lojacontroller.php?acao=insfornecedor">
            <table>
                <tr>
                    <td><label >CNPJ : </label></td>                     
                </tr>
                <tr>
                    <td><input type="text" name="cnpj" size="20"></td>
                </tr>            
                <tr>
                    <td><label >Nome : </label></td>                     
                </tr>
                <tr>
                    <td><input type="text" name="nome" size="60"></td>
                </tr>
                <tr>
                    <td><label for="">Razão social : </label></td> 
                </tr>
                <tr>
                    <td><input type="text" name="razaosocial" size="60"></td>
                </tr>           
                <tr>
                    <td><label>Endereço : </label><input type="text" name="endereco" size="69"></td>
                </tr>       
                <tr>
                    <td>&nbsp;&nbsp;<label>Numero : </label><input type="text" name="endereco" size="10">
                    <label>Bairro : </label><input type="text" name="numero" size="45"></td>
                </tr>  
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;<label>Cidade : </label><input type="text" name="cidade" size="60"></td>
                </tr>       
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;<label>Estado : </label>
                    <select name="estado">
                        <option value="sp">São Paulo</option>
                        <option value="mg">Minas Gerais</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="pr">Paraná</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Telefone : </label><input type="text" name="telresidencial" size="11"></td>
                </tr>    
                <tr>
                    <td>&nbsp;&nbsp;<label>Celular : </label><input type="text" name="telcelular" size="12"></td>
                </tr>                                   
                <tr>
                    <td><label>Nome representante : </label></td>
                </tr>
                <tr>
                    <td><input type="text" name="nomerepresentante" size="45"></td>
                </tr>
                <tr>
                    <td><label for="observacao">Observação :</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="observacao" size="45"></td>
                </tr>
                <tr>
                    <td><label for="email">Email : </label></td>
                </tr>
                <tr>
                    <td><input type="text" name="email" size="45"></td>
                </tr>      
                <tr>
                    <td><label for="cep">CEP : </label></td>
                </tr>
                <tr>
                    <td><input type="text" name="cep" size="8"></td>
                </tr>                            
            </table>
            <button>Gravar</button>
        </form>
    </body>
</html>