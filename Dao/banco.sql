create database escrevasuahistoria;
use escrevasuahistoria;

create table usuario(
id int primary key auto_increment,
nome varchar(60) not null,
email varchar(60) not null,
nome_usuario varchar(30) not null,
senha varchar(20) not null,
qntdseguidor int not null default "0",
biografia varchar(150)null,
foto varchar(250) null,
banner varchar(250) null);

INSERT INTO `publicacao` (`id`, `id_usuario_fk`, `titulo`, `capa`, `artigo`, `data`, `hora`) VALUES
(1, 1, 'Massacretion', '../imgs/Massacretion.jpeg', 'teste', '2021-10-05', '21:10:25'),
(7, 2, 'Roots', '../imgs/Roots.jpg', 'Teste', '2021-10-05', '21:10:25'),
(8, 2, 'Bad Brains', '../imgs/BadBrains.jpg', 'Teste', '2021-10-05', '21:10:25'),
(9, 2, 'Black Flag', '../imgs/BlackFlag.jpg', 'Teste', '2021-10-05', '21:10:25'),
(10, 2, 'Black Sabbath', '../imgs/BlackSabbath.jpg', 'Teste', '2021-10-05', '21:10:25'),
(11, 2, 'De La Soul', '../imgs/DeLaSoul.jpg', 'Teste', '2021-10-05', '21:10:25'),
(12, 2, 'Descendents', '../imgs/Descendents.jpg', 'Teste', '2021-10-05', '21:10:25'),
(13, 2, 'Gorilla Biscuits', '../imgs/GorillaBiscuits.jpg', 'Teste', '2021-10-05', '21:10:25'),
(14, 2, 'Iggy Pop', '../imgs/iggyPop.jpg', 'Teste', '2021-10-05', '21:10:25'),
(15, 2, 'Joy Division', '../imgs/JoyDivision.jpg', 'Teste', '2021-10-05', '21:10:25'),
(16, 2, 'Minutemen', '../imgs/Minutemen.jpg', 'Teste', '2021-10-05', '21:10:25'),
(17, 2, 'Mukeka di Rato', '../imgs/Mukeka.jpg', 'Teste', '2021-10-05', '21:10:25'),
(18, 2, 'Off Spring', '../imgs/OffSpring.jpg', 'Teste', '2021-10-05', '21:10:25'),
(19, 2, 'Suburban', '../imgs/Suburban.jpg', 'Teste', '2021-10-05', '21:10:25'),
(20, 2, 'The Smiths', '../imgs/TheSmiths.jpg', 'Teste', '2021-10-05', '21:10:25');

INSERT INTO `usuario` (`id`, `nome`, `email`, `nome_usuario`, `senha`) VALUES
(1, 'Messias', 'messias@gmail.com', 'Booms_Sk8', 'Skatebord'),
(2, 'Messias', 'messiasGP@gmail.com', 'Wesley_sk8', 'user@123'),
(3, 'Messias', 'MessiasTeste@gmail.com', 'MessiasTeste', 'user@123'),
(4, 'BruceBatman', 'messias@gmail.com', 'WayneBatman', 'user@123');

select * from usuario;

create table publicacao(
id int primary key auto_increment,
id_usuario_fk int, 
titulo varchar(50) not null,
capa varchar(250) not null,
artigo longtext not null,
data date,
hora time,
foreign key(id_usuario_fk)references usuario(id));



create table comentarios(
id int primary key auto_increment,
id_usuario_fk int,
id_publicacao_fk int,
comentario text,
foreign key(id_usuario_fk)references usuario(id),
foreign key (id_publicacao_fk) references publicacao(id));

create table permissoes(
id int primary key auto_increment,
id_usuario_fk int,
permissoes varchar(30),
foreign key(id_usuario_fk) references usuario(id));