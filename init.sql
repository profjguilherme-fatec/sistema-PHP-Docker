CREATE TABLE IF NOT EXISTS usuario (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  senha VARCHAR(100) NOT NULL
);

-- Senha em texto puro só para exemplo!
INSERT INTO usuario (nome, senha) VALUES ('admin', 'admin123');