INSERT INTO `user`(`username`) VALUES ('Koen');

INSERT INTO `bericht`(`content`, `user_iduser`) 
VALUES ('Koen is geel geworden in de zomer', LAST_INSERT_ID());
