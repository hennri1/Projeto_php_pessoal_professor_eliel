<h1>Cadastrar Jogador</h1>

<form action="?page=salvar-jogador" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_jogador" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email_jogador" class="form-control">
    </div>

    <div class="mb-3">
        <label>Discord</label>
        <input type="text" name="discord_jogador" class="form-control">
    </div>

    <div class="mb-3">
        <label>Elo</label>
        <input type="text" name="elo_jogador" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
