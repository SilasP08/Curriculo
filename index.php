<?php
require_once "./crud.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculo</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <?php
    $dados = read($pdo, 'dados_pessoais');
    $contato = read($pdo, 'contato');
    $exp = read($pdo, 'experiencias');
    ?>
    <main class="profile">
        <form action="./update.php" method="POST">

        </form>
        <section class="profile-card">

            <form action="./update.php" method="POST">
                <button class="edit-btn">
                    <i class="fa-solid fa-pen"></i>
                </button>
            </form>

            <div class="profile-image">
                <img src="img/user.png" alt="Foto">
            </div>

            <div class="profile-info">

                <h1><?= $dados['nome']; ?></h1>

                <span><?= $dados['cargo']; ?></span>

                <p>Santo André • SP</p>

            </div>

        </section>

        <section class="about card">
            <form action="./update.php" method="POST">
                <button class="edit-btn">
                    <i class="fa-solid fa-pen"></i>
                </button>
            </form>
            <h2>Sobre Mim</h2>

            <p>
                <?= $dados["informacao_principal"]; ?>
            </p>

        </section>

        <section class="information">

            <div class="card">
                <button class="edit-btn">
                    <i class="fa-solid fa-pen"></i>
                </button>
                <h2>Conheça meus prejetos</h2>
                <p><?= $contato["perfis"]; ?></p>

            </div>

            <div class="card">
                <button class="edit-btn">
                    <i class="fa-solid fa-pen"></i>
                </button>
                <h2>Contato</h2>
                <p><?= $contato['email']; ?></p>
                <p><?= $contato['telefone']; ?></p>
            </div>

        </section>
        <section class="education card">
            <h2>Formação Acadêmica</h2>
            <form action="./adicionar.php" method="GET">
                <input type="hidden" name="formacao" value="forma">
                <button type="submit" class="add-btn">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </form>

            <div class="education-grid">

                <?php
                $formacoes = readALL($pdo, 'formacao');
                foreach ($formacoes as $formacoe) {
                    echo '
                        <div class="education-item">

                            <div class="education-header">
                                <h3>' . $formacoe['instituicao'] . '</h3>
                                <form action="./update.php" method="POST">
                                    <button class="edit-item">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                </form>
                                <form action="./apagar.php" method="GET">
                                    <input type="hidden" name="id_formacao" value="' . $formacoe['id_formacao'] . '">
                                    <button type="submit" class="remove-btn">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="education-body">

                                <div class="info">
                                    <p>' . $formacoe['curso'] . '</p>
                                </div>

                                <div class="info">
                                    <span>Período</span>
                                    <p>' . $formacoe['periodo'] . '</p>
                                </div>

                            </div>

                        </div>
                        
                    ';
                }
                ;

                ?>
            </div>
        </section>
        <section class="experience card">
            <form action="./adicionar.php" method="GET">
                <input type="hidden" name="expe" value="ex">
                <button class="edit-btn">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </form>
            <h2>Experiências Profissionais</h2>

            <div class="experience-grid">
                <?php
                $expes = readAll($pdo, ' experiencias');
                foreach ($expes as $ex) {

                    print '
                    <div class="experience-item">

                    <div class="experience-header">
                        <h3>' . $ex['empresa'] . '</h3>
                        <form action="./update.php" method="POST">
                            <button class="edit-item">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </form>
                        <form action="./apagar.php" method="GET">
                            <input type="hidden" name="id_exp" value="' . $ex['id_exp'] . '">
                            <button type="submit" class="remove-btn">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </form>
                    </div>

                    <div class="experience-body">

                        <div class="info">
                            <span>Função</span>
                            <p>' . $ex['funcao'] . '</p>
                        </div>

                        <div class="info">
                            <span>Período</span>
                            <p>' . $ex['periodo'] . '</p>
                        </div>

                        <div class="info">
                            <span>Descrição</span>
                            <p>
                                ' . $ex['descricao'] . '
                            </p>
                        </div>

                    </div>

                </div>
                ';

                }
                ?>
            </div>
        </section>
    </main>
</body>

</html>