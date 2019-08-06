CREATE DATABASE pondokit;

USE pondokit;

CREATE TABLE santri (
id int AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(255),
age int,
birth_place VARCHAR(255),
birth_date DATE,
hobby VARCHAR(255));

INSERT INTO santri(nama, age, birth_place, birth_date, hobby) 
VALUES('Sidik', '20', 'Cabang', '98-12-05' , 'Membaca'),
('Sofyan', '20', 'Purwokerto', '99-06-13' , 'Selfie'),
('Rohman', '21', 'Magelang', '98-02-20', 'Berenang'),
('Mamank', '18', 'Kalianda', '01-05-23', 'Makan Coklat');
