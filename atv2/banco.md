// Vamos adicionar uma nova coluna.

USE rede_estudo;

ALTER TABLE equipamentos
ADD COLUMN status VARCHAR(20) NOT NULL;

UPDATE equipamentos
SET status = 'online'
WHERE id = 1;

UPDATE equipamentos
SET status = 'offline'
WHERE id = 2;

UPDATE equipamentos
SET status = 'online'
WHERE id = 3;

UPDATE equipamentos
SET status = 'offline'
WHERE id = 4;

UPDATE equipamentos
SET status = 'online'
WHERE id = 5;
