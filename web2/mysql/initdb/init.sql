CREATE TABLE IF NOT EXISTS user
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(32) NOT NULL,
    password VARCHAR(32) NOT NULL
);

INSERT INTO user (username, password) VALUES ('Alice', '161120ef1193c9207dd60236f4a800a1');
INSERT INTO user (username, password) VALUES ('Bob', '5c69b665aa4e40b61b826e7d9e1c2beb');
INSERT INTO user (username, password) VALUES ('Carol', 'b7df0cbc9e44603cd45f08f4dc356e14');
