INSERT INTO user (name, pass) VALUES
('admin', 'admin123'),
('john', 'johnpass'),
('sarah', 'sarahpass');

INSERT INTO product_img (img) VALUES
('img1.jpg'),
('img2.jpg'),
('img3.jpg');

INSERT INTO product_categorie (category_namme) VALUES
('groente'),
('fruit');

INSERT INTO product (name, description, price, stock, product_img_idproduct_img, product_categorie_idproduct_categorie) VALUES
('Appel', '500 Gram', '10', '100', 1, 2),
('Peer', '250 Gram', '9', '50', 2, 2),
('Komkommer', '200 Gram', '12.50', '30', 3, 1);

INSERT INTO aanbiedingen (name, korting_value, start_date, end_date, product_idproduct) VALUES
('Zomeractie', '20%', '2025-06-01', '2025-06-15', 1),
('Winterdeal', '10%', '2025-12-01', '2025-12-31', 2);
