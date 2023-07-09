CREATE DATABASE IF NOT EXISTS equipe6;
USE equipe6;

CREATE TABLE IF NOT EXISTS villes (
    nom VARCHAR(100) NOT NULL,
    region VARCHAR(100) NOT NULL,
    population INT NOT NULL
);

REPLACE INTO villes (nom, region, population)
VALUES
('Amqui', 'Bas-Saint-Laurent', 6065),
('Barkmere', 'Laurentides', 59),
('Carignan', 'Montérégie', 10959),
('Magog', 'Estrie', 27354),
('Ville-Marie', 'Abitibi-Témiscamingue', 2483);