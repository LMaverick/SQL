-- SQLite
-- Criação da tabela de Categorias
CREATE TABLE Categorias (
    categoria_id INTEGER PRIMARY KEY,
    nome_categoria TEXT
);

-- Criação da tabela de Filmes
CREATE TABLE Filmes (
    filme_id INTEGER PRIMARY KEY,
    titulo TEXT,
    ano_lancamento INTEGER,
    categoria_id INTEGER,
    FOREIGN KEY (categoria_id) REFERENCES Categorias(categoria_id)
);
