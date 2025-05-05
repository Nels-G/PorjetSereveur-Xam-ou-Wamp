CREATE DATABASE IF NOT EXISTS emploi_temps;
USE emploi_temps;

-- Table des filières
CREATE TABLE filieres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

-- Table des classes
CREATE TABLE classes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    filiere_id INT,
    FOREIGN KEY (filiere_id) REFERENCES filieres(id)
);

-- Table des étudiants
CREATE TABLE etudiants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    classe_id INT,
    FOREIGN KEY (classe_id) REFERENCES classes(id)
);

-- Table des professeurs
CREATE TABLE professeurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

-- Table des modules
CREATE TABLE modules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

-- Table des salles
CREATE TABLE salles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

-- Table des cours (emploi du temps)
CREATE TABLE cours (
    id INT AUTO_INCREMENT PRIMARY KEY,
    module_id INT,
    professeur_id INT,
    classe_id INT,
    salle_id INT,
    jour_semaine ENUM('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi') NOT NULL,
    heure_debut TIME NOT NULL,
    heure_fin TIME NOT NULL,
    FOREIGN KEY (module_id) REFERENCES modules(id),
    FOREIGN KEY (professeur_id) REFERENCES professeurs(id),
    FOREIGN KEY (classe_id) REFERENCES classes(id),
    FOREIGN KEY (salle_id) REFERENCES salles(id)
);
