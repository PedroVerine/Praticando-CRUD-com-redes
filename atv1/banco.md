    CREATE TABLE equipamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    tipo VARCHAR(50) NOT NULL,
    portas INT NOT NULL
    );

INSERT INTO equipamentos (nome, tipo, portas) VALUES
('SW-01', 'Switch', 24),
('SW-02', 'Switch', 48),
('RT-01', 'Roteador', 4),
('OLT-01', 'OLT', 16),
('EDD-01', 'EDD', 8);
