<h1>Lista de Jogadores</h1>

<?php
require_once "config.php";

$sql = "SELECT jogador.*, elo.nome_elo, elo.divisao 
        FROM jogador 
        LEFT JOIN elo ON elo.id_elo = jogador.elo_id";

$res = $conn->query($sql);

$qtd = ($res) ? $res->num_rows : 0;

if ($qtd > 0) {
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>Discord</th>";
    print "<th>Elo</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {

        $elo = $row->nome_elo ? "{$row->nome_elo} {$row->divisao}" : "Sem elo";

        print "<tr>";
        print "<td>{$row->id_jogador}</td>";
        print "<td>{$row->nome_jogador}</td>";
        print "<td>{$row->email_jogador}</td>";
        print "<td>{$row->discord_jogador}</td>";
        print "<td>$elo</td>";

        print "<td>
                <button class='btn btn-success'
                    onclick=\"location.href='?page=editar-jogador&id={$row->id_jogador}';\">
                    Editar
                </button>

                <button class='btn btn-danger'
                    onclick=\"if(confirm('Deseja realmente excluir?')) {
                        location.href='?page=salvar-jogador&acao=excluir&id={$row->id_jogador}';
                    }\">
                    Excluir
                </button>
            </td>";

        print "</tr>";
    }

    print "</table>";
} else {
    print "<p>Nenhum resultado encontrado.</p>";
}
?>
