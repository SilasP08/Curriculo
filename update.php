<?php
require_once './crud.php';

$dados = $_POST['d'] ?? '';
if ($dados === 'dados_form') {
    $update = [
        '' => $_POST[''],
    ];
}

$contato = $_POST['c'] ?? '';
if ($contato === '') {

}

$experiencia = $_POST['xp'] ?? '';
if ($experiencia === 'xp') {
    $add = [
        'empresa' => $_POST['empresa'],
        'funcao' => $_POST['cargo'],
        'periodo' => $_POST['periodo'],
        'descricao' => $_POST['desc']
    ];

    create($pdo, 'experiencias', $add);
    header('Location: index.php');
}

$formacao = $_POST['f'] ?? '';
if ($formacao === 'for') {
    $add = [
        'instituicao' => $_POST['instituicao'],
        'curso' => $_POST['curso'],
        'periodo' => $_POST['periodo']
    ];

    create($pdo, 'formacao', $add);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Formação</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/formulario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

    <main class="container">
        <section class="form-card">
            <?php
            $d = $_POST['dados'] ?? '';
            $e = $_POST['exper'] ?? '';
            $f = $_POST['forma'] ?? '';
            $c = $_POST['contato'] ?? '';
            if ($d === 'dado') {
                print '
                    <div class="form-header">
                        <h1>Editar Dados</h1>
                        <p>Preencha as informações abaixo.</p>
                    </div>
                    <form action="./update.php" method="POST">
                        <input type="hidden" name="d" value="dados_form">
                        <div class="input-group">
                            <label>nome</label>
                            <input type="text" name="nome" placeholder="">
                        </div>

                        <div class="input-group">
                            <label>cargo</label>
                            <input type="text" name="cargo">
                        </div>

                        <div class="input-group">
                            <label>Informações</label>
                            <textarea name="desc"></textarea>
                        </div>

                        <div class="buttons">
                            <a href="./index.php" class="cancel" type="button">
                                Cancelar
                            </a>
                            <button class="save" type="submit">
                                Salvar
                            </button>
                        </div>
                    </form>
                ';
            } else if ($c === 'conta') {
                print '
                    <div class="form-header">
                        <h1>Editar Contato</h1>
                        <p>Preencha as informações abaixo.</p>
                    </div>
                    <form action="./update.php" method="POST">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="text" name="email">
                        </div>

                        <div class="input-group">
                            <label>Telefone</label>
                            <input type="text" name="telefone">
                        </div>

                        <div class="input-group">
                            <label>Redes Socias</label>
                            <input type="text" name="rede">
                        </div>

                        <div class="buttons">
                            <a href="./index.php" class="cancel" type="button">
                                Cancelar
                            </a>
                            <button class="save" type="submit">
                                Salvar
                            </button>
                        </div>
                    </form>
                ';
            } else if ($e === 'exp') {
                print '
                    <div class="form-header">
                        <h1>Editar Experiencias</h1>
                        <p>Preencha as informações abaixo.</p>
                    </div>
                    <form action="./update.php" method="POST">
                            <input type="hidden" name="xp" value="xp">
                            <div class="input-group">
                                <label>Empresa</label>
                                <input type="text" name="empresa" placeholder="Google">
                            </div>

                            <div class="input-group">
                                <label>Cargo</label>
                                <input type="text" name="cargo" placeholder="Dev. Senior">
                            </div>

                            <div class="input-group">
                                <label>Período</label>
                                <input type="text" name="periodo" placeholder="2022-2025">
                            </div>
                            <div class="input-group">
                                <label>Descricao</label>
                                <textarea name="desc"></textarea>
                            </div>

                            <div class="buttons">
                                <a href="./index.php" class="cancel" type="button">
                                    Cancelar
                                </a>
                                <button class="save" type="submit">
                                    Salvar
                                </button>
                            </div>
                        </form>
                ';
            } else if ($f === 'formac') {
                print '
                    <div class="form-header">
                        <h1>Editar Formação</h1>
                        <p>Preencha as informações abaixo.</p>
                    </div>

                    <form action="./update.php" method="POST">
                        <input type="hidden" name="f" value="for">
                        <div class="input-group">
                            <label>Instituição</label>
                            <input type="text" name="instituicao">
                        </div>

                        <div class="input-group">
                            <label>Curso</label>
                            <input type="text" name="curso">
                        </div>

                        <div class="input-group">
                            <label>Período</label>
                            <input type="text" name="periodo">
                        </div>

                        <div class="buttons">
                            <a href="./index.php" class="cancel" type="button">
                                Cancelar
                            </a>
                            <button class="save" type="submit">
                                Salvar
                            </button>
                        </div>
                    </form>
                ';
            }
            ?>


            <!-- <form action="#" method="POST">
                <div class="input-group">
                    <label>Instituição</label>
                    <input type="text" name="instituicao">
                </div>

                <div class="input-group">
                    <label>Curso</label>
                    <input type="text" name="curso">
                </div>

                <div class="input-group">
                    <label>Período</label>
                    <input type="text" name="periodo">
                </div>

                <div class="buttons">
                    <button class="cancel" type="button">
                        Cancelar
                    </button>
                    <button class="save" type="submit">
                        Salvar
                    </button>
                </div>
            </form> -->
        </section>
    </main>

</body>

</html>