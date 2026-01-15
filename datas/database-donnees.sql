USE bibliotheque;
INSERT INTO utilisateur (nom, prenom, email, password, role) VALUES
('Martin','Paul','paul.martin@mail.com',MD5('hash1'),'admin'),

('Durand','Sophie','sophie.durand@mail.com',MD5('hash2'),'employe'),
('Bernard','Luc','luc.bernard@mail.com',MD5('hash3'),'employe'),
('Petit','Emma','emma.petit@mail.com',MD5('hash4'),'employe'),

('Leroy','Hugo','hugo.leroy@mail.com',MD5('hash5'),'abonne'),
('Moreau','Lea','lea.moreau@mail.com',MD5('hash6'),'abonne'),
('Fournier','Lucas','lucas.fournier@mail.com',MD5('hash7'),'abonne'),
('Girard','Chloe','chloe.girard@mail.com',MD5('hash8'),'abonne'),
('Andre','Nathan','nathan.andre@mail.com',MD5('hash9'),'abonne'),
('Lefevre','Manon','manon.lefevre@mail.com',MD5('hash10'),'abonne'),
('Mercier','Louis','louis.mercier@mail.com',MD5('hash11'),'abonne'),
('Roux','Camille','camille.roux@mail.com',MD5('hash12'),'abonne'),
('Fontaine','Tom','tom.fontaine@mail.com',MD5('hash13'),'abonne'),
('Chevalier','Sarah','sarah.chevalier@mail.com',MD5('hash14'),'abonne'),
('Robin','Jules','jules.robin@mail.com',MD5('hash15'),'abonne'),
('Garnier','Alice','alice.garnier@mail.com',MD5('hash16'),'abonne'),
('Lambert','Noah','noah.lambert@mail.com',MD5('hash17'),'abonne'),
('Blanc','Eva','eva.blanc@mail.com',MD5('hash18'),'abonne'),
('Henry','Leo','leo.henry@mail.com',MD5('hash19'),'abonne'),
('Masson','Ines','ines.masson@mail.com',MD5('hash20'),'abonne'),

('Duval','Mathis','mathis.duval@mail.com','hash21','abonne'),
('Perrot','Clara','clara.perrot@mail.com','hash22','abonne'),
('Renaud','Ethan','ethan.renaud@mail.com','hash23','abonne'),
('Colin','Lina','lina.colin@mail.com','hash24','abonne'),
('Marchand','Louis','louis.marchand@mail.com','hash25','abonne'),
('Caron','Mila','mila.caron@mail.com','hash26','abonne'),
('Perrin','Adam','adam.perrin@mail.com','hash27','abonne'),
('Renard','Julia','julia.renard@mail.com','hash28','abonne'),
('Schmitt','Noe','noe.schmitt@mail.com','hash29','abonne'),
('Philippe','Zoe','zoe.philippe@mail.com','hash30','abonne'),

('Lemoine','Axel','axel.lemoine@mail.com','hash31','abonne'),
('Benoit','Nina','nina.benoit@mail.com','hash32','abonne'),
('Remy','Theo','theo.remy@mail.com','hash33','abonne'),
('Arnaud','Lou','lou.arnaud@mail.com','hash34','abonne'),
('Gaillard','Ilyes','ilyes.gaillard@mail.com','hash35','abonne'),
('Roussel','Mael','mael.roussel@mail.com','hash36','abonne'),
('Barbier','Anna','anna.barbier@mail.com','hash37','abonne'),
('Teixeira','Enzo','enzo.teixeira@mail.com','hash38','abonne'),
('Navarro','Inaya','inaya.navarro@mail.com','hash39','abonne'),
('Leclerc','Baptiste','baptiste.leclerc@mail.com','hash40','abonne');

INSERT INTO livre (auteur, titre, resume, genre) VALUES
('Victor Hugo','Les Miserables','Roman historique sur la justice sociale','Roman'),
('George Orwell','1984','Societe totalitaire et surveillance','Science-fiction'),
('Albert Camus','L\'Etranger','Un homme face a l\'absurde','Philosophie'),
('J.K. Rowling','Harry Potter a l\'ecole des sorciers','Debut des aventures de Harry','Fantasy'),
('J.R.R. Tolkien','Le Hobbit','Voyage d\'un hobbit inattendu','Fantasy'),
('Mary Shelley','Frankenstein','Creation et responsabilite','Gothique'),
('Bram Stoker','Dracula','Le mythe du vampire','Horreur'),
('Agatha Christie','Le Crime de l\'Orient-Express','Enquete de Poirot','Policier'),
('Dan Brown','Da Vinci Code','Thriller religieux','Thriller'),
('Stephen King','Shining','Hotel hante','Horreur'),

('Flaubert','Madame Bovary','Drame conjugal','Classique'),
('Zola','Germinal','Lutte ouvriere','Classique'),
('Asimov','Fondation','Empire galactique','Science-fiction'),
('Herbert','Dune','Planete desertique','Science-fiction'),
('Huxley','Le Meilleur des mondes','Societe conditionnee','Science-fiction'),

('Musso','La Vie est un roman','Destins croises','Roman'),
('Werber','Les Fourmis','Civilisation insecte','Science-fiction'),
('King','Ca','Creature malefique','Horreur'),
('Rowling','Harry Potter et la Chambre des secrets','Suite magique','Fantasy'),
('Tolkien','Le Seigneur des anneaux','Quete epique','Fantasy'),

('Eco','Le Nom de la rose','Meurtre medieval','Historique'),
('Kafka','Le Proces','Absurde judiciaire','Philosophie'),
('Verne','Voyage au centre de la Terre','Aventure scientifique','Aventure'),
('Verne','20 000 Lieues sous les mers','Exploration sous-marine','Aventure'),
('Dumas','Les Trois Mousquetaires','Amitie et honneur','Aventure'),

('Proust','Du cote de chez Swann','Memoire et temps','Classique'),
('Sartre','La Nausee','Existentialisme','Philosophie'),
('Orwell','La Ferme des animaux','Satire politique','Politique'),
('Camus','La Peste','Epidemie allegorique','Philosophie'),
('King','Misery','Enfermement','Thriller'),

('Collins','Hunger Games','Jeux mortels','Science-fiction'),
('Suzanne Collins','L\'Embrasement','Rebellion','Science-fiction'),
('Suzanne Collins','La Revolte','Chute du regime','Science-fiction'),
('Brown','Inferno','Enigmes et art','Thriller'),
('Christie','Dix petits negres','Suspense','Policier'),

('Larsson','Millenium','Thriller nordique','Policier'),
('Gaiman','American Gods','Mythologie moderne','Fantasy'),
('Murakami','Kafka sur le rivage','Realisme magique','Roman'),
('King','Docteur Sleep','Suite de Shining','Horreur'),
('Asimov','Les Robots','Ethique de l\'IA','Science-fiction'),

('Tolkien','Silmarillion','Mythologie','Fantasy'),
('Herbert','Le Messie de Dune','Suite politique','Science-fiction'),
('Rowling','Harry Potter et le Prisonnier d\'Azkaban','Voyage temporel','Fantasy'),
('Zweig','Amok','Passion destructrice','Nouvelle'),
('Hemingway','Le Vieil Homme et la mer','Lutte et dignite','Classique'),

('Orwell','Hommage a la Catalogne','Guerre civile','Historique'),
('Camus','L\'Homme revolte','Revolte et justice','Philosophie'),
('King','Le Fleau','Epidemie mondiale','Horreur'),
('Verne','Michel Strogoff','Mission en Russie','Aventure'),

('Asimov','Prelude a Fondation','Origines de l empire','Science-fiction'),
('Asimov','L Aube de Fondation','Naissance de la psychohistoire','Science-fiction'),
('King','Le Pistolero','Debut de la Tour sombre','Fantasy'),
('King','Les Trois Cartes','Quete interdimensionnelle','Fantasy'),
('King','Terres Perdues','Monde post-apocalyptique','Fantasy'),

('Rowling','Harry Potter et la Coupe de Feu','Tournoi des sorciers','Fantasy'),
('Rowling','Harry Potter et l Ordre du Phenix','Resistance a Voldemort','Fantasy'),
('Rowling','Harry Potter et le Prince de Sang-Mele','Secrets de Voldemort','Fantasy'),
('Rowling','Harry Potter et les Reliques de la Mort','Combat final','Fantasy'),

('Tolkien','Les Enfants de Hurin','Tragedie de la Terre du Milieu','Fantasy'),
('Tolkien','Beren et Luthien','Amour legendaire','Fantasy'),
('Tolkien','La Chute de Gondolin','Cite perdue','Fantasy'),

('Christie','Mort sur le Nil','Crime en croisiere','Policier'),
('Christie','ABC contre Poirot','Meurtres alphabetiques','Policier'),
('Christie','Cartes sur table','Crime aristocratique','Policier'),

('Grisham','La Firme','Thriller juridique','Thriller'),
('Grisham','Le Client','Affaire criminelle','Thriller'),
('Grisham','L Innocent','Justice et complot','Thriller'),

('Musso','Central Park','Enigme romantique','Roman'),
('Musso','Demain','Voyage temporel','Roman'),
('Musso','L Instant present','Destins lies','Roman'),

('Werber','L Empire des anges','Vie apres la mort','Philosophie'),
('Werber','Le Livre du voyage','Reflexion existentielle','Philosophie'),
('Werber','Troisieme humanite','Evolution humaine','Science-fiction'),

('Murakami','1Q84','Realite alternative','Roman'),
('Murakami','Chroniques de l oiseau a ressort','Quete interieure','Roman'),
('Murakami','After Dark','Nuit tokyoite','Roman'),

('Harlan Coben','Ne le dis a personne','Suspense familial','Thriller'),
('Harlan Coben','Juste un regard','Secrets enfouis','Thriller'),

('Frank Herbert','Les Enfants de Dune','Destin imperial','Science-fiction'),
('Frank Herbert','L Empereur Dieu de Dune','Pouvoir absolu','Science-fiction'),

('Dan Simmons','Hyperion','Pelerinage spatial','Science-fiction'),
('Dan Simmons','La Chute d Hyperion','Guerre galactique','Science-fiction'),

('Isaac Asimov','Les Cavernes d acier','Enquete futuriste','Science-fiction'),
('Isaac Asimov','Face aux feux du soleil','Societe robotisee','Science-fiction'),

('Orwell','Une fille comme les autres','Satire sociale','Roman'),
('Orwell','Un peu d air frais','Angleterre populaire','Roman'),

('Camus','Le Malentendu','Drame absurde','Theatre'),
('Camus','Caligula','Tyrannie et pouvoir','Theatre'),

('Zola','L Assommoir','Misere sociale','Classique'),
('Zola','Nana','Ascension et chute','Classique'),

('Balzac','Le Pere Goriot','Ambition parisienne','Classique'),
('Balzac','Eugenie Grandet','Avarice et amour','Classique'),

('Hugo','Notre-Dame de Paris','Amour et fatalite','Classique'),
('Hugo','L Homme qui rit','Justice sociale','Classique'),

('Dostoievski','Crime et Chatiment','Culpabilite','Classique'),
('Dostoievski','Les Freres Karamazov','Foi et morale','Classique'),

('Eco','Baudolino','Mensonge historique','Historique'),
('Eco','Numero zero','Manipulation mediatique','Politique'),

('Verne','De la Terre a la Lune','Voyage spatial','Aventure'),
('Verne','Autour de la Lune','Exploration lunaire','Aventure'),

('King','22 11 63','Voyage temporel','Science-fiction'),
('King','Mr Mercedes','Tueur en serie','Policier'),

('Collins','Gregor','Aventure souterraine','Fantasy'),
('Pullman','A la croisee des mondes','Mondes paralleles','Fantasy'),

('Gaiman','Neverwhere','Londres fantastique','Fantasy'),
('Gaiman','Stardust','Conte magique','Fantasy'),

('Brown','Origine','Science et religion','Thriller'),
('Brown','Anges et Demons','Societe secrete','Thriller'),

('Zweig','Lettre d une inconnue','Amour obsessionnel','Nouvelle'),
('Zweig','Le Joueur d echecs','Psychologie','Nouvelle');

INSERT INTO emprunt (id_livre, id_utilisateur, date_sortie, date_rendu, date_reservation, statut) VALUES
(1,5,'2025-01-02',NULL,'2025-01-02','en cours'),
(2,5,'2025-01-05',NULL,'2025-01-05','en cours'),
(3,6,'2025-01-10','2025-01-20','2025-01-10','rendu'),
(4,6,'2025-01-12',NULL,'2025-01-12','en cours'),

(5,7,NULL,NULL,'2025-01-31','reserve'),
(6,8,'2025-01-01','2025-01-15','2025-01-01','rendu'),
(7,8,'2025-01-03',NULL,'2025-01-03','en cours'),

(8,9,'2025-01-07',NULL,'2025-01-07','en cours'),
(9,9,'2025-01-09',NULL,'2025-01-09','en cours'),
(10,9,'2025-01-11',NULL,'2025-01-11','en cours'),

(11,10,NULL,NULL,'2025-01-26','reserve'),

(12,11,'2024-12-15','2025-01-05','2024-12-15','rendu'),
(13,11,'2025-01-08',NULL,'2025-01-08','en cours'),

(14,12,'2025-01-02','2025-01-18','2025-01-02','rendu'),
(15,12,NULL,NULL,'2025-01-17','reserve'),

(16,13,'2025-01-01',NULL,'2025-01-01','en cours'),
(17,13,'2025-01-05',NULL,'2025-01-05','en cours'),
(18,13,'2025-01-07',NULL,'2025-01-07','en cours'),
(19,13,'2025-01-09',NULL,'2025-01-09','en cours'),
(20,13,'2025-01-11',NULL,'2025-01-11','en cours'),

(21,14,'2025-01-04','2025-01-20','2025-01-04','rendu'),
(22,15,NULL,NULL,'2026-01-01','reserve'),
(23,16,'2025-01-06',NULL,'2025-01-06','en cours'),

(24,17,'2025-01-08','2025-01-19','2025-01-08','rendu'),
(25,18,'2025-01-10',NULL,'2025-01-10','en cours'),
(26,19,NULL,NULL,'2026-01-17','reserve'),
(27,20,'2025-01-12',NULL,'2025-01-12','en cours'),

(55,21,NULL,NULL,'2025-02-01','reserve'),
(56,21,'2025-02-02',NULL,'2025-01-30','en cours'),

(57,22,'2025-01-20','2025-02-05','2025-01-15','rendu'),
(58,22,NULL,NULL,'2025-02-03','reserve'),

(59,23,'2025-02-01',NULL,'2025-01-29','en cours'),
(60,23,'2025-02-02',NULL,'2025-01-31','en cours'),
(61,23,'2025-02-03',NULL,'2025-02-01','en cours'),

(62,24,NULL,NULL,'2025-02-04','reserve'),

(63,25,'2025-01-10','2025-01-25','2025-01-05','rendu'),

(64,26,'2025-02-02',NULL,'2025-01-30','en cours'),
(65,26,'2025-02-03',NULL,'2025-02-01','en cours'),

(66,27,NULL,NULL,'2025-02-05','reserve'),

(67,28,'2025-01-15','2025-01-28','2025-01-10','rendu'),

(68,29,'2025-02-01',NULL,'2025-01-29','en cours'),
(69,29,'2025-02-02',NULL,'2025-01-31','en cours'),
(70,29,'2025-02-03',NULL,'2025-02-01','en cours'),
(71,29,'2025-02-04',NULL,'2025-02-02','en cours'),

(72,30,NULL,NULL,'2025-02-06','reserve');
