create database blabla;
use blabla;


create table membre( 
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    mdp VARCHAR(100)
);


INSERT INTO membre (nom, mdp) VALUES ('hu', 'a');
INSERT INTO membre (nom, mdp) VALUES ('huh', 'a');
INSERT INTO membre (nom, mdp) VALUES ('huhu', 'a');

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_membre int,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    status ENUM('pending', 'in_progress', 'completed') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);