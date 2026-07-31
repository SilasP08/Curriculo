use db_curri;

Create table dados_pessoais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cargo VARCHAR(100) NULL,
<<<<<<< HEAD
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
=======
    informacao_principal TEXT NULL,
    img VARCHAR(1000) NULL
);

Create table contato (
       id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(14) NOT NULL,
    perfis VARCHAR(1000) NULL
     FOREIGN KEY (usuario_id)
        REFERENCES usuarios(id)
);

Create table experiencias (
       id INT AUTO_INCREMENT PRIMARY KEY,
    empresa VARCHAR(100) NULL,
    funcao VARCHAR(100) NULL,
    periodo INT NULL,
    descricao VARCHAR(1000) NULL
     FOREIGN KEY (usuario_id)
        REFERENCES usuarios(id)
);

Create table formacao (
       id INT AUTO_INCREMENT PRIMARY KEY,
    instituicao VARCHAR(100) NULL,
    curso VARCHAR(100) NULL,
    periodo INT NULL
     FOREIGN KEY (usuario_id)
        REFERENCES usuarios(id)
);

INSERT INTO dados_pessoais (
    nome
)VALUES (
    "Silas Possarle"
);

INSERT INTO contato (
    email, telefone
)VALUES (
    "silas30@gmail.com", "(11) 99999-1111"
>>>>>>> 48270a3e5ce33c78cc60e6f420643dd0d3976bb6
);