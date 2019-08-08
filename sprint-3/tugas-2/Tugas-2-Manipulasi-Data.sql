--Soal no 1
CREATE DATABASE pondokit;

USE pondokit;

CREATE TABLE santri (
id INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(255),
age INT,
divisi VARCHAR(255)
);

--soal no 2
INSERT INTO santri(nama, age, divisi) 
VALUES('Sidik', '20', 'Back End'),
('Sofyan', '18', 'Back End'),
('Rohman', '25', 'Mobile Java'),
('Andi', '17', 'Back End'),
('Roihan', '20', 'Back End'),
('Aldi', '23', 'Back End'),
('Fauzan', '19', 'Mobile Java'),
('Sukardi', '19', 'Mobile Java'),
('Wahyudi', '22', 'Front End'),
('Idris', '25', 'Mobile React JS'),
('Huzaifah', '21', 'Front End'),
('Arifin', '18', 'Mobile React JS'),
('Ibnu', '16', 'Mobile React JS'),
('Faizi', '24', 'Front End'),
('Ulwan', '20', 'Front End'),
('Rafli', '18', 'Back End'),
('Albaihaqi', '25', 'Front End'),
('Amar', '20', 'Front End'),
('Faris', '21', 'Front End'),
('Dimas', '23', 'Front End');

--Soal no 3 -> PDO
-- SELECT * FROM santri
-- WHERE id = 13;

--Soal no 4 -> PDO
-- UPDATE santri
-- SET nama = 'Ahsan S', age = '23', divisi = 'Programmer'
-- WHERE id = 17;

--Soal no 5 ->PDO
-- DELETE FROM santri
-- WHERE id = 19;

-- INSERT INTO santri(nama, age, divisi) 
-- VALUES('Arif', '21', 'Back End'),
-- ('Imam', '20', 'Back End'),
-- ('Riffadi', '19', 'Mobile Java'),
-- ('Rahmad', '24', 'API'),
-- ('Rahmadi', '18', 'API');

--soal no 6
SELECT * FROM santri
ORDER BY age ASC LIMIT 15;

SELECT * FROM santri
ORDER BY age DESC LIMIT 15;

--soal no 7
SELECT COUNT(id) FROM santri;

SELECT AVG(age) FROM santri;