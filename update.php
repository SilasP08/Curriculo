<?php
require_once './crud.php';

$dados = $_POST['dados'] ?? '';
if ($dados == 'd') {
}
$experiencia = $_POST['xp'] ?? '';
if ($experiencia === 'xp') {
    $add = [
        'empresa'=> $_POST['empresa'],
        'funcao'=> $_POST['cargo'],
        'periodo'=> $_POST['periodo'],
        'descricao'=> $_POST['desc']
    ];

    create($pdo, 'experiencias', $add);
    header('Location: index.php');
}

$formacao = $_POST['f'] ??'';
if ($formacao === 'for') {
    $add = [
        'instituicao'=> $_POST['instituicao'],
        'curso'=> $_POST['curso'],
        'periodo'=> $_POST['periodo']
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
            <div class="form-header">
                <h1>Adicionar Formação</h1>
                <p>Preencha as informações abaixo.</p>
            </div>

            <form action="#" method="POST">
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
            </form>
        </section>
    </main>

</body>

</html>