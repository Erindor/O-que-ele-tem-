USE oqt

-- As coisas comentadas é que já foram Adicionadas


-----------------------------------------
-- Abastecer Categoria
-----------------------------------------
-- JÁ ADICIONADO
INSERT INTO Categoria (nome, descricao) VALUES ("olhos", "solucoes para problemas nos olhos");
INSERT INTO Categoria (nome, descricao) VALUES ("respiracao", "solucoes para problemas na respiracao");
INSERT INTO Categoria (nome, descricao) VALUES ("pele", "solucoes para problemas na pele"); 
INSERT INTO Categoria (nome, descricao) VALUES ("estomago", "solucoes para problemas estomacais");
INSERT INTO Categoria (nome, descricao) VALUES ("ouvido", "solucoes para problemas de ouvido");
INSERT INTO Categoria (nome, descricao) VALUES ("nariz", "solucoes para problemas de nariz");
INSERT INTO Categoria (nome, descricao) VALUES ("sanitario", "solucoes para problemas de hábitos sanitários");*/


----------------------------------------------
-- Perguntas para categoria OLHOS (id = 1)----
----------------------------------------------
 --JÁ ADICIONADO
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu cão está esfregando o rosto e os olhos com frequência?", "Vá ao veterinário em 24h", 1);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seus olhos possuem hemorragia,inchaço ou machucadura?", "Primeiros socorrros, vá ao veterinário imediatamente", 1);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Os olhos de seu cão estão fora de órbita?", "Primeiros socorrros, vá ao veterinário imediatamente", 1);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu cão ultimanente apresenta dificuldade de enxergar?", "Vá ao veterinário no mesmo dia", 1);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu cão não está abrindo os olhos?", "Vá ao veterinário no mesmo dia", 1);


-- --------------------------------------------
-- Perguntas para categoria Respiração (id = 2)
-- --------------------------------------------
-- JÁ ADICIONADO
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu cão está com a respiração está ofegante, forçada ou superficial?", "Primeiros socorrros, vá ao veterinário imediatamente", 2);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Ele está respirando de forma rápida ou muito lenta?", "Vá ao veterinário imediatamente", 2);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("A respiração de seu cão está ruidosa?", "Vá ao veterinário imediatamente", 2);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Sua respiração está acompanhada de tosse?", "Se persistir por 24H, ligue para orientação", 2);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu cão está arfando de modo intenso e incessante?", "Vá ao veterinário imediatamente", 2);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu cão não está respirando?", "paginaSolucaoRespiracao6", 2); -- solucao muito grande!




----------------------------------------------
-- Perguntas para categoria Pele (id = 3)
----------------------------------------------
/* JÁ ADICIONADO*/
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu cão tem se coçado de modo intenso e violento?", "Vá ao veterinário imediatamente", 3);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu cão está com perda de pelos?", "Vá ao veterinário assim que possível", 3);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu cão está sangrando? Possui cortes ou escoriações?", "paginaSolucaoPele3", 3); -- A solucao deste eh muito grande, vamos criar uma pagina 


----------------------------------------------
-- Perguntas para categoria Estomago (id = 4)
----------------------------------------------
-- JÁ ADICIONADO
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu animal está vomitando?", "Observar o que o animal comeu nas últimas horas, levá-lo ao veterinário imediatamente e relatar a ele.", 4);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu animal está com diarreia?", "Fazer com que seu animal beba bastante água e levá-lo ao veterinário com urgência.", 4);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu cão não está comendo?", "Vá ao veterinário em 24h", 4);


----------------------------------------------
-- Perguntas para categoria Ouvido (id = 5)
----------------------------------------------
-- JÁ ADICIONADO
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Há algum sangramento nos ouvidos do seu cão?", "Primeiros socorrros, vá ao veterinário imediatamente", 5);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Os ouvidos do seu cão estão sujos, pegajosos e/ou malcheirosos?", "Vá ao veterinário em 24h", 5);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("A ponta da orelha do seu cão está inchada?", "Vá ao veterinário em 24h", 5);


----------------------------------------------
-- Perguntas para categoria Nariz (id = 6)
----------------------------------------------
--JÁ ADICIONADO
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Há hemorragia no nariz do seu cão?", "Primeiros socorrros, vá ao veterinário imediatamente", 6);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu cão está com espirros constantes?", "Dar anti-histamínico. Se persistir, levar ao veteterinário dentro de 24h.", 6);



----------------------------------------------
-- Perguntas para categoria Hábitos Sanitários (id = 7)
-----------------------------------------------
 --JÁ ADICIONADO
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu cão tenta, mas não consegue urinar?", "Vá ao veterinário no mesmo dia", 7);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Há sangue na urina do seu cão?", "Levar ao veteterinário dentro de 24h.", 7);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu cão tenta, mas não consegue defecar?", "Vá ao veterinário no mesmo dia.", 7);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Há sangue nas fezes de seu cão?", "Vá ao veterinário no mesmo dia.", 7);
INSERT INTO Pergunta (pergunta, solucao, Categoria_idCategoria) VALUES ("Seu cão não evacua há mais de 48h?", "Procure orientação com um veterinário por telefone.", 7);



