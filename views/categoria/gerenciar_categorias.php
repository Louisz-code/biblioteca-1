<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
require_once __DIR__ . "/../../models/categoria.php";

$resultado = Categoria::listar();

?>

<main class="container-centraliza">
    <a href="/biblioteca/views/categoria/cadastro_categoria.php" class="link-btn">Adicionar Categoria</a>
    <table>
        <tr>
            <th>Nome da Categoria</th>
            <th colspan="2">Opções</th>
        </tr>

        <?php foreach($resultado as $categoria): ?>
            <tr>
                <td><?= $categoria['nome'] ?></td>
                <td>Editar</td>
                <td>Deletar</td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>

<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>