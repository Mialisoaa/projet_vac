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