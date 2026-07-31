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
</head>

<body>
    <?php
    $dados = read($pdo, 'dados_pessoais');
    $contato = read($pdo, 'contato');
    $exp = read($pdo, 'experiencias');
    ?>
    <main class="profile">

        <section class="banner">

        </section>

        <section class="profile-card">

            <div class="profile-image">

                <img src="img/user.png" alt="Foto">

            </div>

            <div class="profile-info">

                <h1><?= $dados['nome']; ?></h1>

                <span><?= $dados['cargo'] ?></span>

                <p>Santo André • SP</p>

                <div class="profile-buttons">

                    <button>Editar Perfil</button>

                </div>

            </div>

        </section>

        <section class="about card">

            <h2>Sobre Mim</h2>

            <p>
                <?= $dados["informacao_principal"]; ?>
            </p>

        </section>

        <section class="information">

            <div class="card">

                <h2>Conheça meus prejetos</h2>
                <p><?= $contato["perfis"]; ?></p>

            </div>

            <div class="card">

                <h2>Contato</h2>
                <p><?= $contato['email']; ?></p>
                <p><?= $contato['telefone']; ?></p>
            </div>

        </section>
        <section class="education card">

            <h2>Formação Acadêmica</h2>

            <div class="education-grid">

                <div class="education-item">

                    <h3>Anhanguera</h3>

                    <h4>Engenharia de Software</h4>

                    <span>2024 - 2028</span>

                </div>

                <div class="education-item">

                    <h3>Senai</h3>

                    <h4>Desenvolvimento de Sistemas</h4>

                    <span>2022 - 2023</span>

                </div>

            </div>

        </section>
        <section class="experience card">

            <h2>Experiências Profissionais</h2>

            <div class="experience-grid">

                <div class="experience-item">

                    <h3>Google</h3>

                    <h4>Desenvolvedor Full Stack</h4>

                    <span>2023 - Atual</span>

                    <p>
                        Desenvolvimento de aplicações web utilizando
                        Java, Spring Boot e React.
                    </p>

                </div>

                <div class="experience-item">

                    <h3>Microsoft</h3>

                    <h4>Estagiário</h4>

                    <span>2022 - 2023</span>

                    <p>
                        Desenvolvimento interno de sistemas.
                    </p>

                </div>

            </div>

        </section>
    </main>
</body>

</html>