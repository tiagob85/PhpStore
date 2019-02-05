<?php
    require "conexao.php";
    require "lojaservice.php";
    require "fornecedor.model.php";
    require "produto.model.php";
    require "marca.model.php";
    require "secao.model.php";

    $acao = '';

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    switch ($acao) {
        case "inssecao" :
            /*echo 'Nome da ação : '.$acao;
            echo $_POST['nome'];*/
            $secao = new Secao();
            $secao->__set('descricao', $_POST['nome']);
            $conexao = new Conexao();
            $lojaService = new LojaService($conexao);
            $lojaService->inserirSecao($secao);
            header('Location: cadsecao.php');
        break;
        
        case "insmarca" :
            $marca = new Marca();
            $marca->__set('descricao', $_POST['nome']);
            $conexao = new Conexao();
            $lojaService = new LojaService($conexao);
            $lojaService->inserirMarca($marca);
            header('Location: cadmarca.php');
        break;

        case "insfornecedor":
            $fornecedor = new Fornecedor();
            $fornecedor->__set('nome', $_POST['nome']);
            $fornecedor->__set('razaosocial', $_POST['razaosocial']);
            $fornecedor->__set('endereco', $_POST['endereco']);
            $fornecedor->__set('numero', $_POST['numero']);
            $fornecedor->__set('bairro', $_POST['bairro']);
            $fornecedor->__set('cidade', $_POST['cidade']);
            $fornecedor->__set('estado', $_POST['estado']);
            $fornecedor->__set('cep', $_POS['cep']);
            $fornecedor->__set('telresidencial', $_POST['telresidencial']);
            $fornecedor->__set('telcelular', $_POST['nome']);
            $fornecedor->__set('cnpj', $_POST['cnpj']);
            $fornecedor->__set('nomerepresentante', $_POST['nomerepresentante']);
            $fornecedor->__set('observacao', $_POST['observacao']);
            $fornecedor->__set('email', $_POST['email']);
            $conexao = new Conexao();
            $lojaService = new LojaService($conexao);
            $lojaService->inserirFornecedor($fornecedor);
            header('Location: cadfornecedor.php');
        break;    
    }

?>