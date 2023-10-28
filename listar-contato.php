<h1>Listar Contatos</h1>
<?php
$sql = "SELECT * FROM tblContato";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class = 'table table-hover
        table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Celular</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->contato_codigo . "</td>";
        print "<td>" . $row->contato_nome . "</td>";
        print "<td>" . $row->contato_celular . "</td>";
        print "<td>
                <button onclick=\"location.href='?page=editar&contato_codigo=".$row->contato_codigo . "';\" 
                class = 'btn btn-success'>
                Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?'))
                {location.href='?page=salvar&acao=excluir&contato_codigo=".$row->contato_codigo . "';}
                else{false;}\" class = 'btn btn-danger'>
                Excluir</button>
              </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class = 'alert alert-danger'>
        Não foram encontrados resultados! </p>";
}
?>
