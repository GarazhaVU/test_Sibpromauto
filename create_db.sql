CREATE TABLE Cars 
	(id INT not null,
     model varchar(100),
     Type varchar(20),
     price int);
     
CREATE TABLE Client
	(id INT not null,
    name varchar(100),
    phone varchar(20));
    
CREATE TABLE _Order
    (id INT not null,
    name_pet varchar(100),
    client_id INT not null,
    date_time DATETIME);
    
CREATE TABLE OrderWork
	(order_id INT not null,
     work_id INT not null);
     
     
CREATE TABLE _Work
	(id INT not null,
     name varchar(100),
     price INT)



INSERT INTO cars(id, model, Type, price)
VALUES
(1, 'Skoda Octavia', 'Sedan', 2500000),
(2, 'Hyundai Solaris', 'Sedan', 1500000),
(3, 'Opel Transit', 'Minivan',  2500000),
(4, 'Kia Ceed', 'Hatchback', 2200000);


INSERT INTO client (id, name, phone)
VALUES
(1, 'John Doe', '+78005551234'),
(2, 'Benjamin Read', '+78005559876'),
(3, 'Stanley Parry', '+78005554321'),
(4, 'Mason Burns', null),
(5, 'Rory Russell', '+78005554567'),
(6, 'Kian Powell', null),
(7, 'Darian Reynolds', '+78005551111'),
(8, 'Kamari Hood', '+78005552222'),
(12, 'Leonel Berger', '+78005553333'),
(13, 'Stefan Landry', '+78005554444'),
(14, 'Diego Bray', '+78005552223');


INSERT INTO orderwork (order_id, work_id)
VALUES
(1, 1),
(1, 2),
(2, 5),
(3, 1),
(3, 4),
(4, 3),
(5, 2),
(5, 1),
(5, 4);


INSERT INTO _order (id, name_pet, client_id, date_time)
VALUES
(1, 'Max', 2, '2021/09/31 12:56:00'),
(2, 'Bobby', 1, '2021/10/05 08:12:33'),
(3, 'Woofer', 3, '2021/10/05 04:09:21'),
(4, 'Birdo', 6, '2021/10/01 14:42:01'),
(5, 'Purrenator', 13, '2021/10/30 16:31:31');


INSERT INTO _work (id, name, price)
VALUES
(1, 'Grooming', 500),
(2, 'Nail clipping', 40),
(3, 'Beak cleaning', 300),
(4, 'Shots', 1500),
(5, 'Ear drops', 460);

SELECT _order.id, client.name,client.phone,_order.name_pet, _work.name 
FROM _order 
JOIN client ON _order.client_id = client.id
JOIN orderwork ON _order.id = orderwork.order_id
JOIN _work ON orderwork.work_id = _work.id
WHERE YEAR(_order.date_time) = 2021 AND MONTH(_order.date_time) = 10
ORDER BY _order.date_time


Задание 2.

1)
SELECT * FROM cars 
ORDER BY price DESC
LIMIT 1;

2)
SELECT * FROM cars 
WHERE price IN (SELECT MAX(price) FROM cars);

3)
SELECT * FROM cars 
WHERE price = (SELECT MAX(price) FROM cars);


CREATE TABLE facility
(
    id INT PRIMARY KEY
)