<?php
require_once 'config.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM jogador WHERE id_jogador = $id";
$res = $conn->query($sql);
$row = $res ? $res->fetch_object() : null;
?>

<h1>Editar jogador</h1>

<?php if ($row): ?>
<form action="salvar-jogador.php" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_jogador" value="<?php echo htmlspecialchars($row->id_jogador); ?>">

    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_jogador" value="<?php echo htmlspecialchars($row->nome_jogador); ?>" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>E-mail
            <input type="email" name="email_jogador" value="<?php echo htmlspecialchars($row->email_jogador); ?>" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Discord
            <input type="text" name="discord_jogador" value="<?php echo htmlspecialchars($row->discord_jogador); ?>" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Elo
            <select name="elo_id" class="form-control">
                <option value="">-= Selecionar =-</option>

                <?php
                $sql2 = "SELECT * FROM elo ORDER BY nome_elo, divisao";
                $res2 = $conn->query($sql2);

                while($e = $res2->fetch_object()){
                    $selected = ($row->elo_id == $e->id_elo) ? "selected" : "";
                    echo "<option value='{$e->id_elo}' $selected>{$e->nome_elo} {$e->divisao}</option>";
                }
                ?>
            </select>
        </label>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<?php else: ?>
    <p>jogador não encontrado.</p>
<?php endif; ?>
