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
        <?php
            $confirma_exp = $_GET['expe'] ?? '';
            $confirma_forma = $_GET['formacao'] ??'';
            if($confirma_exp === 'ex') {
                print '
                    <section class="form-card">
                        <div class="form-header">
                            <h1>Adicione sua Experiencia</h1>
                            <p>Preencha as informações abaixo.</p>
                        </div>

                        <form action="" method="POST">
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
                                <textarea></textarea>
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
                ';    
            } else if($confirma_forma === 'forma') {
                print '
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
                ';
            } else {
                print 'Não Achado';
            }
        ?>
       
    </main>

</body>

</html>