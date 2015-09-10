INSERT INTO Usuario (link_usuario, nome_usuario, data_de_nascimento_usuario, genero_usuario, id_usuario)
 VALUES ('www.01.com', 'João', '11-12-2002', 'masculino', null);

INSERT INTO Usuario (link_usuario, nome_usuario, data_de_nascimento_usuario, genero_usuario, id_usuario)
 VALUES ('www.02.com', 'Maiara', '13-05-1992', 'feminino', null);

INSERT INTO Usuario (link_usuario, nome_usuario, data_de_nascimento_usuario, genero_usuario, id_usuario)
 VALUES ('www.03.com', 'Ricardo', '01-01-2000', 'masculino', null);

INSERT INTO Usuario (link_usuario, nome_usuario, data_de_nascimento_usuario, genero_usuario, id_usuario)
 VALUES ('www.03.com', 'Carlos', '12-12-1989', 'masculino', null);
/*
Inserir categoria esportiva
*/
INSERT INTO Categoria_Esportiva (nome_categ_esportiva, num_min_participantes_cat, 
num_max_participantes_cat, id_categoria_esportiva_cat, num_atual_participante_cat) 
VALUES ('', '', '', '', '');

INSERT INTO Categoria_Esportiva (nome_categ_esportiva, num_min_participantes_cat, 
num_max_participantes_cat, id_categoria_esportiva_cat, num_atual_participante_cat) 
VALUES ('', '', '', '', '');

INSERT INTO Categoria_Esportiva (nome_categ_esportiva, num_min_participantes_cat, 
num_max_participantes_cat, id_categoria_esportiva_cat, num_atual_participante_cat) 
VALUES ('', '', '', '', '');

INSERT INTO Categoria_Esportiva (nome_categ_esportiva, num_min_participantes_cat, 
num_max_participantes_cat, id_categoria_esportiva_cat, num_atual_participante_cat) 
VALUES ('', '', '', '', '');

/*
Inserir Evento
*/

INSERT INTO Evento (id_evento, nome_evento, data_evento, horario_evento, local_evento, descricao_evento,
 privacidade_evento, id_categoria_esportiva_cat, id_usuario, contador_participantes_evento, logra douro, numero,
 cidade, estado) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '');

INSERT INTO Evento (id_evento, nome_evento, data_evento, horario_evento, local_evento, descricao_evento,
 privacidade_evento, id_categoria_esportiva_cat, id_usuario, contador_participantes_evento, logra douro, numero,
 cidade, estado) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '');

INSERT INTO Evento (id_evento, nome_evento, data_evento, horario_evento, local_evento, descricao_evento,
 privacidade_evento, id_categoria_esportiva_cat, id_usuario, contador_participantes_evento, logra douro, numero,
 cidade, estado) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '');

INSERT INTO Evento (id_evento, nome_evento, data_evento, horario_evento, local_evento, descricao_evento,
 privacidade_evento, id_categoria_esportiva_cat, id_usuario, contador_participantes_evento, logra douro, numero,
 cidade, estado) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '');

/*
Inserir Convite
*/
INSERT INTO Convite (id_convite, id_vento, resposta_convite) VALUES ('', '', '');

INSERT INTO Convite (id_convite, id_vento, resposta_convite) VALUES ('', '', '');

INSERT INTO Convite (id_convite, id_vento, resposta_convite) VALUES ('', '', '');

INSERT INTO Convite (id_convite, id_vento, resposta_convite) VALUES ('', '', '');

INSERT INTO Convite (id_convite, id_vento, resposta_convite) VALUES ('', '', '');


