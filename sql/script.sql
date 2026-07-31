use db_curri;

Create table dados_pessoais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cargo VARCHAR(100) NULL,
    informacao_principal VARCHAR(1000) NULL
);

Create table contato (
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(14) NOT NULL,
    perfis VARCHAR(1000) NULL
);

Create table experiencias (
    empresa VARCHAR(100) NULL,
    funcao VARCHAR(100) NULL,
    periodo NUMBER NULL,
    descricao VARCHAR(1000) NULL
);

Create table formacao (
    instituicao VARCHAR(100) NULL,
    curso VARCHAR(100) NULL,
    periodo NUMBER NULL
);