# script crŽŽ le : Thu Nov 22 11:50:26 CET 2012 -   syntaxe MySQL ;

# use  VOTRE_BASE_DE_DONNEE ;

DROP TABLE IF EXISTS Ingredients ;
CREATE TABLE Ingredients (id_ingredient INT(12) AUTO_INCREMENT NOT NULL,
libelle VARCHAR(45),
prix FLOAT(10),
PRIMARY KEY (id_ingredient) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Utilisateurs ;
CREATE TABLE Utilisateurs (id_utilisateur INT(12) AUTO_INCREMENT NOT NULL,
email VARCHAR(45),
mdp VARCHAR(45),
nom VARCHAR(45),
prenom VARCHAR(45),
adresse VARCHAR(255),
code_postal VARCHAR(45),
ville VARCHAR(45),
telephone VARCHAR(45),
qualite VARCHAR(45),
PRIMARY KEY (id_utilisateur) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Commandes ;
CREATE TABLE Commandes (id_commande INT(12) AUTO_INCREMENT NOT NULL,
date_debut DATE,
date_fin DATE,
montant FLOAT(10),
produits VARCHAR(255),
id_utilisateur INT(12) NOT NULL,
PRIMARY KEY (id_commande) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Types_produits ;
CREATE TABLE Types_produits (id_type_produit INT AUTO_INCREMENT NOT NULL,
libelle_type_produit VARCHAR(45),
PRIMARY KEY (id_type_produit) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Pizzas ;
CREATE TABLE Pizzas (id_pizza INT AUTO_INCREMENT NOT NULL,
libelle_pizza VARCHAR(45),
ingredients VARCHAR(255),
id_base INT NOT NULL,
id_produit INT NOT NULL,
PRIMARY KEY (id_pizza) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Produits ;
CREATE TABLE Produits (id_produit INT AUTO_INCREMENT NOT NULL,
libelle_produit VARCHAR(45),
prix_produit FLOAT(10),
description VARCHAR(255),
image VARCHAR(255),
id_type_produit INT NOT NULL,
PRIMARY KEY (id_produit) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Bases ;
CREATE TABLE Bases (id_base INT AUTO_INCREMENT NOT NULL,
libelle_base VARCHAR(45),
PRIMARY KEY (id_base) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Composer ;
CREATE TABLE Composer (id_pizza INT AUTO_INCREMENT NOT NULL,
id_ingredient INT(12) NOT NULL,
PRIMARY KEY (id_pizza,
 id_ingredient) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Comprendre ;
CREATE TABLE Comprendre (id_commande INT(12) AUTO_INCREMENT NOT NULL,
id_produit INT NOT NULL,
PRIMARY KEY (id_commande,
 id_produit) ) ENGINE=InnoDB;

ALTER TABLE Commandes ADD CONSTRAINT FK_Commandes_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateurs (id_utilisateur);

ALTER TABLE Pizzas ADD CONSTRAINT FK_Pizzas_id_base FOREIGN KEY (id_base) REFERENCES Bases (id_base);
ALTER TABLE Pizzas ADD CONSTRAINT FK_Pizzas_id_produit FOREIGN KEY (id_produit) REFERENCES Produits (id_produit);
ALTER TABLE Produits ADD CONSTRAINT FK_Produits_id_type_produit FOREIGN KEY (id_type_produit) REFERENCES Types_produits (id_type_produit);
ALTER TABLE Composer ADD CONSTRAINT FK_Composer_id_pizza FOREIGN KEY (id_pizza) REFERENCES Pizzas (id_pizza);
ALTER TABLE Composer ADD CONSTRAINT FK_Composer_id_ingredient FOREIGN KEY (id_ingredient) REFERENCES Ingredients (id_ingredient);
ALTER TABLE Comprendre ADD CONSTRAINT FK_Comprendre_id_commande FOREIGN KEY (id_commande) REFERENCES Commandes (id_commande);
ALTER TABLE Comprendre ADD CONSTRAINT FK_Comprendre_id_produit FOREIGN KEY (id_produit) REFERENCES Produits (id_produit);
ALTER TABLE `Utilisateurs` ADD UNIQUE (`email`)