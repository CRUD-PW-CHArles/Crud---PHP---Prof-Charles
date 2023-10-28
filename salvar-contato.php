<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["txt_nome"];
        $celular = $_POST["txt_celular"];

        $sql = "INSERT INTO tblcontato (contato_nome, contato_celular) 
            VALUES ('{$nome}', '{$celular}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!');</script>";
            print "<script>location.href='?page=listar'</script>";
        }

        break;

    case 'editar':    
        $nome = $_POST["txt_nome"];
        $celular = $_POST["txt_celular"];

        $sql = "UPDATE tblcontato SET
                contato_nome = '{$nome}',
                contato_celular = '{$celular}'
                WHERE 
                contato_codigo =".$_REQUEST["contato_codigo"];       -    
            

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Editado com sucesso!');</script>";-
            print "<script>location.href='?page=listar'</script>";
        } else {
            print "<script>alert('Não foi possível editar!');</script>";
            print "<script>location.href='?page=listar'</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM tblContato  WHERE contato_codigo=".$_REQUEST["contato_codigo"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Excluido com sucesso!');</script>";
            print "<script>location.href='?page=listar'</script>";
        } else {
            print "<script>alert('Não foi possível excluir!');</script>";
            print "<script>location.href='?page=listar'</script>";
        }

        break;


    default:
        //code
        break;
}
