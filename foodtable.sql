CREATE TABLE IF NOT EXISTS Salats (
   id int,
   price varchar(255),
   UrlImage varchar(255),
   salatname varchar(255)
);
INSERT INTO Salats (price, id, UrlImage, salatname) VALUES
('2.00', '2', 'https://lindseyeatsla.com/wp-content/uploads/2021/10/Lindseyeats_Classic_Caesar_Salad-2.jpg', 'Caesar');




CREATE TABLE IF NOT EXISTS Burgers (
   id int,
   price varchar(255),
   UrlImage varchar(255),
   burgername varchar(255)
);
INSERT INTO  Burgers (price, id, UrlImage, burgername) VALUES
('3.00', '1', 'https://ais.kochbar.de/kbrezept/284621_878966/1200x1200/burger-rezept-bild-nr-1187.jpg', 'Burger');