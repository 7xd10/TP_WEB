CREATE DATABASE RestaurantDB; USE
    RestaurantDB;
CREATE TABLE CLIENT(
    idClient INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    telephone VARCHAR(20)
); CREATE TABLE TableRestaurant(
    idTable INT AUTO_INCREMENT PRIMARY KEY,
    numero INT,
    capacite INT
); CREATE TABLE Reservation(
    idReservation INT AUTO_INCREMENT PRIMARY KEY,
    idClient INT,
    idTable INT,
    dateReservation DATE,
    heure TIME,
    nombrePersonnes INT,
    FOREIGN KEY(idClient) REFERENCES CLIENT(idClient),
    FOREIGN KEY(idTable) REFERENCES TableRestaurant(idTable)
); INSERT INTO CLIENT(nom, telephone)
VALUES('yassine', '0623456789'),('Mohamed', '0634567890'),('ali', '0645678901');
INSERT INTO TableRestaurant(numero, capacite)
VALUES(1, 2),(2, 4),(3, 6);
INSERT INTO Reservation(
    idClient,
    idTable,
    dateReservation,
    heure,
    nombrePersonnes
)
VALUES(1, 1, '2026-01-15', '19:00:00', 2),(1, 2, '2026-01-16', '20:00:00', 3),(2, 3, '2026-01-15', '19:30:00', 4),(3, 1, '2026-01-17', '18:00:00', 2),(2, 2, '2026-01-18', '21:00:00', 3);
SELECT
    *
FROM CLIENT
    ;
SELECT
    *
FROM
    TableRestaurant;
SELECT
    *
FROM
    Reservation;
SELECT
    r.*
FROM
    Reservation r
JOIN CLIENT c ON
    r.idClient = c.idClient
WHERE
    c.nom = 'ali';
SELECT
    *
FROM
    TableRestaurant
WHERE
    capacite >= 4;
SELECT
    c.nom AS nom_client,
    t.numero AS numero_table,
    r.dateReservation,
    r.heure
FROM
    Reservation r
JOIN CLIENT c ON
    r.idClient = c.idClient
JOIN TableRestaurant t ON
    r.idTable = t.idTable;
SELECT
    c.nom AS nom_client,
    t.numero AS numero_table,
    r.dateReservation,
    r.heure
FROM
    Reservation r
JOIN CLIENT c ON
    r.idClient = c.idClient
JOIN TableRestaurant t ON
    r.idTable = t.idTable
ORDER BY
    r.dateReservation,
    r.heure;
SELECT
    c.idClient,
    c.nom,
    COUNT(r.idReservation) AS nombre_reservations
FROM CLIENT
    c
JOIN Reservation r ON
    c.idClient = r.idClient
GROUP BY
    c.idClient,
    c.nom
HAVING
    COUNT(r.idReservation) > 1;
SELECT
    dateReservation,
    COUNT(idReservation) AS nombre_reservations
FROM
    Reservation
GROUP BY
    dateReservation
ORDER BY
    dateReservation;