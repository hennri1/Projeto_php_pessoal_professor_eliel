<h1>Cadastrar Boostador</h1>

<?php
$sql_elo = "SELECT * FROM elo ORDER BY nome_elo, divisao";
$res_elo = $conn->query($sql_elo);
?>

<form action="?page=salvar-boostador" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_boostador" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>E-mail
            <input type="text" name="email_boostador" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Discord
            <input type="text" name="discord_boostador" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Elo
            <select name="elo_id" class="form-control">
                <option value="">-= Selecionar =-</option>

                <?php
                while($e = $res_elo->fetch_object()){
                    echo "<option value='{$e->id_elo}'>{$e->nome_elo} {$e->divisao}</option>";
                }
                ?>
            </select>
        </label>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
