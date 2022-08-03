
DROP TABLE IF EXISTS PESSOAS;
CREATE TABLE PESSOAS (
    ID INTEGER PRIMARY KEY AUTOINCREMENT,
    NOME TEXT NOT NULL
);

INSERT INTO PESSOAS(NOME)
VALUES
('Claudio'),
('Willian'),
('Matheus'),
('Débora'),
('Marli'),
('Bruno'),
('Thiago'),
('Adriano'),
('João'),
('Maria');
