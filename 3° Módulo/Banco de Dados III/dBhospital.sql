CREATE DATABASE Hospital;

USE Hospital;


-- Criando Tabelas --

CREATE TABLE Paciente (
  id_paciente INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  cpf VARCHAR(11) NOT NULL,
  telefone VARCHAR(15),
  endereco VARCHAR(100)
);


CREATE TABLE Médico (
  id_medico INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  especialidade VARCHAR(50) NOT NULL,
  crm VARCHAR(15) NOT NULL,
  telefone VARCHAR(15)
);


CREATE TABLE Consulta (
  id_consulta INT AUTO_INCREMENT PRIMARY KEY,
  data_consulta DATE NOT NULL,
  horario_consulta TIME NOT NULL,
  id_paciente INT NOT NULL,
  id_medico INT NOT NULL,
  FOREIGN KEY (id_paciente) REFERENCES Paciente(id_paciente),
  FOREIGN KEY (id_medico) REFERENCES Médico(id_medico)
);


CREATE TABLE Exame (
  id_exame INT AUTO_INCREMENT PRIMARY KEY,
  data_exame DATE NOT NULL,
  horario_exame TIME NOT NULL,
  id_paciente INT NOT NULL,
  id_medico INT NOT NULL,
  resultado VARCHAR(100),
  FOREIGN KEY (id_paciente) REFERENCES Paciente(id_paciente),
  FOREIGN KEY (id_medico) REFERENCES Médico(id_medico)
);


SHOW TABLES;



-- Inserindo Dados --

INSERT INTO Paciente (nome, cpf, telefone, endereco) VALUES ('Fulano de Tal', '12345678901', '(11) 9999-9999', 'Rua das Flores, 123');


INSERT INTO Médico (nome, especialidade, crm, telefone) VALUES ('Dr. João da Silva', 'Cardiologia', '12345/SP', '(11) 8888-8888');


INSERT INTO Consulta (data_consulta, horario_consulta, id_paciente, id_medico) VALUES ('2023-03-17', '10:00:00', 1, 1);


INSERT INTO Exame (data_exame, horario_exame, id_paciente, id_medico, resultado) VALUES ('2023-03-18', '14:00:00', 1, 1, 'Resultado do exame');


-- Usando Selects no Banco --

-- Selecionar todos os pacientes cadastrados na tabela "Paciente": --

SELECT * FROM Paciente;


-- Selecionar o nome e o CRM dos médicos que atendem na especialidade de Cardiologia: --

SELECT nome, crm FROM Médico WHERE especialidade = 'Cardiologia';


-- Selecionar a data, o horário e o nome do médico das consultas agendadas para o dia 17/03/2023: --

SELECT data_consulta, horario_consulta, nome 
FROM Consulta 
JOIN Médico ON consulta.id_medico = médico.id_medico
WHERE data_consulta = '2023-03-17';


-- Selecionar a data, o horário e o resultado dos exames realizados pelo paciente com CPF 12345678901 -- 

SELECT data_exame, horario_exame, resultado 
FROM Exame 
WHERE id_paciente = (SELECT id_paciente FROM Paciente WHERE cpf = '12345678901');


-- Relatório de pacientes cadastrados, exibindo nome, CPF, telefone e endereço.

SELECT nome, cpf, telefone, endereco
FROM Paciente;


-- Relatório de médicos cadastrados, exibindo nome, especialidade, CRM e telefone.

SELECT nome, especialidade, crm, telefone
FROM Médico;


-- Relatório de consultas agendadas para um médico específico, exibindo nome do paciente, data e horário da consulta.

SELECT Paciente.nome, Consulta.data_consulta, Consulta.horario_consulta
FROM Consulta
JOIN Paciente ON Consulta.id_paciente = Paciente.id_paciente
WHERE Consulta.id_medico = 1;


-- Relatório de consultas agendadas para um paciente específico, exibindo nome do médico, data e horário da consulta.

SELECT Médico.nome, Consulta.data_consulta, Consulta.horario_consulta
FROM Consulta
JOIN Médico ON Consulta.id_medico = Médico.id
WHERE Consulta.id_paciente = 1;


-- Relatório de exames realizados por um paciente específico, exibindo data, horário e resultado.

SELECT data_exame, horario_exame, resultado
FROM Exame
WHERE id_paciente = 1;


-- Relatório de médicos por especialidade, exibindo quantos médicos há em cada especialidade.

SELECT especialidade, COUNT(*) AS quantidade
FROM Médico
GROUP BY especialidade;


-- Relatório de consultas agendadas para cada dia da semana, exibindo a quantidade de consultas em cada dia.

SELECT DAYNAME(data_consulta) AS dia_da_semana, COUNT(*) AS quantidade
FROM Consulta
GROUP BY DAYNAME(data_consulta);


-- Relatório de exames realizados por um médico específico, exibindo nome do paciente, data e horário do exame e resultado.

SELECT Paciente.nome, Exame.data_exame, Exame.horario_exame, Exame.resultado
FROM Exame
JOIN Paciente ON Exame.id_paciente = Paciente.id
WHERE Exame.id_medico = 1;



