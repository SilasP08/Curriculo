use db_curri;

Create table dados_pessoais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cargo VARCHAR(100) NULL,
    informacao_principal VARCHAR(1000) NULL,
    img VARCHAR(1000) NULL
);

Create table contato (
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(14) NOT NULL,
    perfis VARCHAR(1000) NULL
);

Create table experiencias (
    empresa VARCHAR(100) NULL,
    funcao VARCHAR(100) NULL,
    periodo VARCHAR(100) NULL,
    descricao VARCHAR(1000) NULL
);

Create table formacao (
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
('Universidade Federal', 'Análise e Desenvolvimento de Sistemas', 2019-2022),
('Instituto de Tecnologia', 'Pós-Graduação em Arquitetura de Software', 2022-2024);

INSERT INTO experiencias (empresa, funcao, periodo, descricao) VALUES 
('Comércio de Alimentos Ltda', 'Assistente Administrativo', 2020-2021, 'Gestão de fluxo de caixa, emissão de notas fiscais, controle de estoque e atendimento a fornecedores.'),
('Global Logística', 'Analista de Operações', 2022-2025, 'Monitoramento de rotas de entrega, gestão de indicadores de desempenho (KPIs) e elaboração de relatórios gerenciais.');