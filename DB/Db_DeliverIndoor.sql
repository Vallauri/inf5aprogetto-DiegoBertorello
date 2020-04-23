CREATE TABLE Utenti(
idUtente Int NOT NULL AUTO_INCREMENT,
nome varchar(30) NOT NULL,
cognome varchar(30) NOT NULL,
username varchar(30) NOT NULL,
pwd varchar(30) NOT NULL,
email varchar(30) NOT NULL,
telefono int NOT NULL,
img varchar(255) NOT NULL,
PRIMARY KEY (idUtente)
);

CREATE TABLE Attivita(
idAttivita Int NOT NULL AUTO_INCREMENT,
nomeAttivita varchar(30) NOT NULL,
telefono int NOT NULL,
emailAttivita varchar(30) NOT NULL,
pwdAttivita varchar(30) NOT NULL,
indirizzo varchar(70) NOT NULL,
raggioConsegna int NOT NULL,
partitaIva varchar(30) NOT NULL,
orariAttivita varchar(30) NOT NULL,
imgAttivita varchar(255) NOT NULL,
categoriaAttivita varchar(255) NOT NULL,
descrizioneAttivita varchar(255) NOT NULL,
PRIMARY KEY (idAttivita)
);

CREATE TABLE Menu(
idPiatto Int NOT NULL AUTO_INCREMENT,
descPiatto varchar(255) NOT NULL,
prezzo int NOT NULL,
idAttivita int NOT NULL,
tipoPagamento varchar(30) NOT NULL,
PRIMARY KEY (idPiatto),
FOREIGN KEY (idAttivita) REFERENCES Attivita(idAttivita)
);

CREATE TABLE Recensioni(
idRecensione Int NOT NULL AUTO_INCREMENT,
idUtente int NOT NULL,
idAttivita int NOT NULL,
descrizione varchar(255) NOT NULL,
PRIMARY KEY (idRecensione),
FOREIGN KEY (idUtente) REFERENCES Utenti(idUtente),
FOREIGN KEY (idAttivita) REFERENCES Attivita(idAttivita),
);