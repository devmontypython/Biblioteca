CREATE TABLE Autor (
Id int auto_increment PRIMARY KEY,
Nome Varchar(255),
Data_Nascimento Date,
CPF Char(11)
);

CREATE TABLE Categoria (
Id int auto_increment PRIMARY KEY,
Descricao Varchar(100)
);

CREATE TABLE Livro (
Id int auto_increment PRIMARY KEY,
Id_Categoria int not null,
Titulo varchar(255) not null,
Editora varchar(150) not null,
Ano Year not null,
Isbn varchar(100) not null,
FOREIGN KEY(Id_Categoria) REFERENCES Categoria(Id)
);

CREATE TABLE Aluno (
Id int auto_increment PRIMARY KEY,
Nome varchar(150),
RA int,
Curso varchar(150)
);

CREATE TABLE Usuario (
Id int auto_increment PRIMARY KEY,
Nome varchar(150),
Email varchar(150),
Senha varchar(100)
);

CREATE TABLE Livro_Autor_Assoc (
Id_Livro int not null,
Id_Autor int not null,
FOREIGN KEY(Id_Livro) REFERENCES Livro (Id),
FOREIGN KEY(Id_Autor) REFERENCES Autor (Id),
PRIMARY KEY(Id_Livro, Id_Autor)
);

CREATE TABLE Emprestimo (
Id int auto_increment PRIMARY KEY,
Data_Emprestimo Date not null,
Data_Devolucao Date not null,
Id_Usuario int not null,
Id_Aluno int not null,
Id_Livro int not null,
FOREIGN KEY(Id_Usuario) REFERENCES Usuario (Id),
FOREIGN KEY(Id_Livro) REFERENCES Livro (Id),
FOREIGN KEY(Id_Aluno) REFERENCES Aluno (Id)
);

