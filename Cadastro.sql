Use apresi;

INSERT INTO clientes VALUES

(default, 'Erick Costa','SC','2007-07-16'),
(default,'Letícia Almeida','RJ','2009-03-26'),
(default,'Vitor Gomes','SC','2005-12-03'),
(default,'Tânia Ribeiro','RS','2011-05-12'),
(default,'Nicolas Barros','SC','2008-09-30');

select * from clientes
where UF = 'SC'
order by NOME asc;