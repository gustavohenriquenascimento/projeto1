CREATE TABLE fale_conosco (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL,
  assunto VARCHAR(150),
  mensagem TEXT NOT NULL,
  data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE DATABASE IF NOT EXISTS projeto11
DEFAULT CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;
USE projeto11;

CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cidade VARCHAR(100),
    estado VARCHAR(50)
);





/*descrição 

para esse projeto utilizei algumas ferramentes a mais que o senhor não passou 
como forech, endif e a estilização da tabela fale conosco.

tive algumas dificuldades e recorri a alguns vídeos do youtube, no mais deu tudo certo.*/