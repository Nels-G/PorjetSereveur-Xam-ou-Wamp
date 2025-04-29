CREATE DATABASE biblio;

USE biblio;

CREATE TABLE auteurs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL
);

CREATE TABLE livres (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(150) NOT NULL,
  idAuteur INT,
  FOREIGN KEY (idAuteur) REFERENCES auteurs(id)
);

INSERT INTO auteurs (nom) VALUES
('Clive Cussler'),
('Harlan Coben'),
('Franck Herbert'),
('Pierre Bordages');

INSERT INTO livres (titre, idAuteur) VALUES
('Odyssee', 1),
('Sahara', 1),
('Dragon', 1),
('Une chance de trop', 2),
('Ne le dis à personne', 2),
('Dune', 3),
('La barriere de santaroga', 3),
('Les guerriers du silence', 4),
('La citadelle hyponeors', 4),
('Terra mater', 4);
