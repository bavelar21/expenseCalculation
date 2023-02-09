CREATE TABLE usuarios (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    senha VARCHAR(100) NOT NULL,
    data_nascimento DATE NOT NULL,
    telefone_celular VARCHAR(50) NOT NULL
);

CREATE TABLE enderecos (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    cep VARCHAR(10) NOT NULL,
    logradouro VARCHAR(200) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    bairro VARCHAR(200) NOT NULL,
    complemento VARCHAR(200) NOT NULL,
    usuario_id INT
);

CREATE TABLE materias_primas (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    valor FLOAT NOT NULL,
    descricao VARCHAR(200),
    data_entrada DATE,
    nome VARCHAR(200)
);

CREATE TABLE receitas(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    margem_lucro FLOAT,
    nome VARCHAR(200),
    embalagem VARCHAR(200),
    data_producao DATE,
    usuario_id INT NOT NULL
);

CREATE TABLE produtos(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(200),
    preco_final FLOAT,
    tipo VARCHAR(200),
    descricao VARCHAR(200),
    data_vencimento DATE,
    usuario_id INT NOT NULL,
    receita_id INT NOT NULL
);

CREATE TABLE usuario_materia_prima (
    usuario_id INT NOT NULL,
    materia_prima_id INT NOT NULL,
    estoque VARCHAR(200)
);

CREATE TABLE materia_prima_receita(
    materia_prima_id INT NOT NULL,
    receita_id INT NOT NULL,
    quantidade FLOAT NOT NULL
);

ALTER TABLE enderecos ADD CONSTRAINT fk_usuario_id_1
    FOREIGN KEY (usuario_id)
    REFERENCES usuarios (id)
    ON DELETE RESTRICT;

ALTER TABLE receitas ADD CONSTRAINT fk_usuario_id_2
    FOREIGN KEY (usuario_id)
    REFERENCES usuarios (id)
    ON DELETE RESTRICT;

ALTER TABLE produtos ADD CONSTRAINT fk_usuario_id_3
    FOREIGN KEY (usuario_id)
    REFERENCES usuarios (id)
    ON DELETE RESTRICT;

ALTER TABLE produtos ADD CONSTRAINT fk_receita_id_1
    FOREIGN KEY (receita_id)
    REFERENCES receitas (id)
    ON DELETE RESTRICT;

ALTER TABLE usuario_materia_prima ADD CONSTRAINT fk_usuario_id_4
    FOREIGN KEY (usuario_id)
    REFERENCES usuarios (id)
    ON DELETE RESTRICT;

ALTER TABLE usuario_materia_prima ADD CONSTRAINT fk_materia_prima_id_1
    FOREIGN KEY (materia_prima_id)
    REFERENCES materias_primas (id)
    ON DELETE RESTRICT;

ALTER TABLE materia_prima_receita ADD CONSTRAINT fk_materia_prima_id_2
    FOREIGN KEY (materia_prima_id)
    REFERENCES materias_primas (id)
    ON DELETE RESTRICT;

ALTER TABLE materia_prima_receita ADD CONSTRAINT fk_receita_id_2
    FOREIGN KEY (receita_id)
    REFERENCES receitas (id)
    ON DELETE CASCADE;