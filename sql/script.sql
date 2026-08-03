use db_curri;

Create table dados_pessoais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cargo VARCHAR(100) NULL,
    informacao_principal VARCHAR(1000) NULL,
    img VARCHAR(1000) NULL
);

Create table contato (
    id_contato INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    perfis VARCHAR(1000) NULL
);

Create table experiencias (
    id_exp INT AUTO_INCREMENT PRIMARY KEY,
    empresa VARCHAR(100) NULL,
    funcao VARCHAR(100) NULL,
    periodo VARCHAR(100) NULL,
    descricao VARCHAR(1000) NULL
);

Create table formacao (
    id_formacao INT AUTO_INCREMENT PRIMARY KEY,
    instituicao VARCHAR(100) NULL,
    curso VARCHAR(100) NULL,
    periodo VARCHAR(100) NULL
);

INSERT INTO dados_pessoais (
    nome, cargo, informacao_principal
)VALUES (
    "Silas Possarle", "Desenvolvedor Senior", 'Minha jornada é pautada pelo aprendizado contínuo e pela busca constante por excelência técnica. Ao longo da minha carreira, liderei e participei ativamente do ciclo completo de desenvolvimento de software — desde a concepção de requisitos e modelagem de bancos de dados até a implementação de microsserviços e integração de APIs RESTful. Tenho grande facilidade para transitar entre equipes multidisciplinares, alinhando necessidades de negócios com decisões técnicas estratégicas.'
);

INSERT INTO contato (
    email, telefone, perfis
)VALUES (
    "silas30@gmail.com", "(11) 99999-1111", 'https://github.com/SilasP08'
);

INSERT INTO formacao (instituicao, curso, periodo) VALUES 
('Universidade Federal', 'Análise e Desenvolvimento de Sistemas', '2019-2022'),
('Instituto de Tecnologia', 'Pós-Graduação em Arquitetura de Software', '2022-2024');
 
INSERT INTO experiencias (empresa, funcao, periodo, descricao) VALUES 
('TechSolutions Inc.', 'Desenvolvedor Junior', '2021-2022', 'Desenvolvimento de aplicações web utilizando React e Node.js. Manutenção de bancos de dados PostgreSQL e integração de APIs REST.'),
('Inovação Digital', 'Desenvolvedor Pleno', '2023-2025', 'Liderança técnica em projetos internos, implementação de microsserviços e otimização de consultas SQL para melhoria de performance.');