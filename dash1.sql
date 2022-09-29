CREATE TABLE meses (
  id_mes int NOT NULL,
  mes varchar(20) NOT NULL PRIMARY KEY
);

INSERT INTO meses (id_mes, mes) VALUES
(4, 'ABR'),
(11, 'NOV'),
(8, 'AGO'),
(12, 'DEZ'),
(9, 'SET'),
(2, 'FEV'),
(1, 'JAN'),
(7, 'JUL'),
(6, 'JUN'),
(5, 'MAI'),
(10, 'OUT'),
(3, 'MAR');

CREATE TABLE clientes (
  id_cliente int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  mes_cliente varchar(10) NOT NULL,
  quantidade int NOT NULL,
  FOREIGN KEY (mes_cliente) REFERENCES meses(mes)
); 

INSERT INTO clientes (mes_cliente, quantidade) VALUES
('JAN', 120),
('FEV', 160),
('MAR', 300);



CREATE TABLE vendas (
  id_venda int AUTO_INCREMENT NOT NULL PRIMARY KEY,
  mes_venda varchar(20) NOT NULL,
  quantidade_venda int NOT NULL,
  valor_venda float NOT NULL,
  FOREIGN KEY (mes_venda) REFERENCES meses(mes)
);


INSERT INTO vendas (mes_venda, quantidade_venda, valor_venda) VALUES
('FEV', 98, 2155.02),
('JAN', 44, 967.56),
('JAN', 100, 2199),
('MAR', 5, 109.95),
('JAN', 18, 395.82),
('MAR', 2, 43.98);



