INSERT INTO `user`(`username`) 
VALUES 
('Koen'),
('piet');

INSERT INTO `bericht`(`content`, `user_iduser`) 
VALUES 
('Koen is geel geworden in de zomer', LAST_INSERT_ID()),
('Het werkt zo te zien', LAST_INSERT_ID());
