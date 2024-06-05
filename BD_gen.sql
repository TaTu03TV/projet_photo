-- Création de la base de données
CREATE DATABASE studio_photographie;

-- Utilisation de la base de données
USE studio_photographie;

-- Table pour les photographes
CREATE TABLE photographers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR (255) NOT NULL,
    lastname VARCHAR (255) NOT NULL,
    img_link VARCHAR (255),
    bio TEXT,
    email VARCHAR(255) UNIQUE,
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Table pour les clients
CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR (255) NOT NULL,
    lastname VARCHAR (255) NOT NULL,
    img_link VARCHAR (255),
    email VARCHAR(255) UNIQUE,
    phone VARCHAR(20),
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Table pour les séances photo
CREATE TABLE sessions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    photographer_id INT,
    client_id INT,
    session_date DATETIME,
    location VARCHAR(255),
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (photographer_id) REFERENCES photographers(id),
    FOREIGN KEY (client_id) REFERENCES clients(id)
);

-- Table pour le formulaire de contact
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR (255) NOT NULL,
    lastname VARCHAR (255) NOT NULL,
    email VARCHAR(255),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


-- Insertion de données dans la table photographers

INSERT INTO photographers (firstname, lastname, bio, email, phone) VALUES
('John', 'Doe', 'Photographe professionnel depuis 10 ans', 'John.Doe@gmail.com', '06 12 34 56 78');

INSERT INTO photographers (firstname, lastname, bio, email, phone) VALUES
('Jane', 'Doe', 'Photographe professionnelle depuis 5 ans', 'Jane.Doe@gmail.com', '06 12 34 56 79');


-- Insertion de données dans la table clients

INSERT INTO clients (firstname, lastname, email, phone, address) VALUES
('Alice', 'Dupont', 'Alice.Dupont@gmail.com', '06 12 34 56 80', '1 rue de la Paix, 75000 Paris');

INSERT INTO clients (firstname, lastname, email, phone, address) VALUES
('Bob', 'Martin', 'Bob.Martin@gmail.com', '06 12 34 56 81', '2 rue de la Liberté, 69000 Lyon');


-- Insertion de données dans la table sessions

INSERT INTO sessions (photographer_id, client_id, session_date, location, description) VALUES
(1, 1, '2021-12-01 10:00:00', 'Studio', 'Shooting photo en studio');

INSERT INTO sessions (photographer_id, client_id, session_date, location, description) VALUES
(2, 2, '2021-12-02 14:00:00', 'Extérieur', 'Shooting photo en extérieur');


-- Insertion de données dans la table contacts

INSERT INTO contacts (firstname, lastname, email, message) VALUES
('Charlie', 'Durand', 'Charlie.Durand@gmail.com', 'Bonjour, je souhaiterais obtenir des informations sur vos prestations.');


-- alter table photographers add column img_link varchar(255);



-- alter table clients add column img_link varchar(255);


