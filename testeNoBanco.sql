-- seleciona no banco de dados na tabela usuario os campos email e nome
SELECT nome, email FROM usuarios;

-- comando de inserir
INSERT INTO usuarios (nome, email, senha, data_nascimento ) VALUES ('jonatam', 'janatam@gmail.com','54322', '2000-10-10'); 
INSERT INTO usuarios SET nome = 'cicrano' , email = 'cicrano@gmail.com', senha = '987', data_nascimento = '1999-10-25'; 

-- comando UPDATE o comando 'WHERE' significa 'ONDE'
UPDATE usuarios SET senha = '999' WHERE nome = 'kennedy';


-- comando DELETE o comando 'WHERE' significa 'ONDE'
DELETE FROM usuarios WHERE id = '4';

-- OR comando "OR" que se trata do "ou"
SELECT * FROM usuarios WHERE id = '1' OR id = '3';
-- AND comando 'AND' é o mesmo que o comando 'e'
SELECT * FROM usuarios WHERE nome = 'Kennedy' AND senha = '999';

-- LIKE comando para pesquisar parte do que esta salvo
SELECT * FROM usuarios WHERE nome LIKE 'Kenn%';

-- BETWEEN comando para pesquisar entre datas ou entre numeros
SELECT * FROM usuarios WHERE data_nascimento BETWEEN '1996-01-01' AND '1997-01-01';

-- IN comando parecidos com o OR
SELECT * FROM usuarios WHERE id IN (1,2,3,4,5);

-- Foi criado uma coluna temporaria chamada soma onde é soma do id com 10
SELECT *, (id + 10) as soma FROM `usuarios`;

-- HAVING é igual o WHERE mas o WHERE não funciona em pesquisa de coluna temporario(ex: soma)
-- porém esse HAVING é mais lento para executar pois ele faz uma pesquisa em todos os dados do banco
SELECT *, (id + 10) as soma FROM `usuarios` HAVING soma < 14 ;

-- ORDER BY coloca o campo selecionado em ordem nesse caso descrecente(DESC)
SELECT * FROM `usuarios` ORDER BY data_nascimento DESC;

-- LIMIT coloca um limite nos resultados 
SELECT * FROM `usuarios` ORDER BY nome LIMIT 3;
-- pula o primeiro registo que seria listado e coloca 3 resultados
SELECT * FROM `usuarios` LIMIT 1,3;

-- GROUP BY filtra pelo grupo faixa_salarial os resultados que foram selecionados
-- GROUP BY normalmente é utilizado em contagem pois senão ele não funciona direito
SELECT COUNT(*) AS contagem, faixa_salarial FROM `usuarios` GROUP BY faixa_salarial;

-- INNER JOIN  faz uma ligação entre as tabelas onde o resultado retorna
--  só os resultado que tiveram uma relação com sucesso entre as tabelas 
SELECT usuarios.nome, usuarios.faixa_salarial, faixas.titulo 
FROM `usuarios` INNER JOIN faixas ON faixas.id = usuarios.faixa_salarial;

-- LEFT JOIN  faz uma ligação entre as tabelas onde o resultado retorna
-- todos os resultados que tem na tabela da ESQUERDA(usuarios) 
-- mesmo que não tenho uma ligação com a outra 
SELECT usuarios.nome, usuarios.faixa_salarial, faixas.titulo
 FROM `usuarios` LEFT JOIN faixas ON faixas.id = usuarios.faixa_salarial;
-- RIGHT JOIN  faz a mesma coisa que o LEFT JOIN mas nesse caso seria a tabela da direita(faixa)


-- FUNÇÃO essa função foi criada para contar os caracteres do parametro enviado
-- a função após ser executada fica salva no banco de dados para ser usado quando necessario
CREATE FUNCTION CONTAR(nome VARCHAR(100))
RETURNS INT(10)
BEGIN
	DECLARE qt INT(10);
    SET qt = SUM(x, y);
    RETURN qt;
END$$
-- após criar a função vamos usar a mesma
SELECT nome, email, CONTAR(nome) AS contagem FROM 'usuarios';


-- VIEW usado apenas quando se tem muitos dados salvo
-- é como se fosse uma tabela criada a partir de uma tabela maior
CREATE VIEW usuariosprimeirafaixa AS
SELECT * FROM usuarios WHERE faixa_salarial = '1';













