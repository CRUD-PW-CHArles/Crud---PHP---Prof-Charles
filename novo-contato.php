<h1>Novo Contato</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="txt_nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Celular:</label>
        <input type="text" name="txt_celular" class="form-control">
    </div>  
    <div class="mb-3">
        <button type="submit" name="btn_enviar" class="btn btn-primary">Enviar</button>
    </div>
</form>

