use tickets;

SET foreign_key_checks = 0;
TRUNCATE TABLE purchases;
TRUNCATE TABLE events;
TRUNCATE TABLE users;

SET foreign_key_checks = 1;

INSERT INTO events (titulo, descripcion, fecha, entrada, ubicacion, created_at, updated_at)
VALUES ('Concierto', 'Concierto de musica', '2023-12-01 18:00:00', 'Entrada Gratuita', 'Concepcion', NOW(), NOW());

INSERT INTO events (titulo, descripcion, fecha, entrada, ubicacion, created_at, updated_at)
VALUES ('Festival', 'Festival de canto', '2023-12-01 18:00:00', 'Entrada Gratuita', 'Talca', NOW(), NOW());

INSERT INTO events (titulo, descripcion, fecha, entrada, ubicacion, created_at, updated_at)
VALUES ('Fiesta del vino', 'Celebración tipica de la zona', '2023-12-01 18:00:00', 'Entrada Gratuita', 'Palmilla', NOW(), NOW());

INSERT INTO users(nombre_cliente, created_at, updated_at)
VALUES('Pedro Reyes', NOW(), NOW());

INSERT INTO users(nombre_cliente, created_at, updated_at)
VALUES('Maria Perez', NOW(), NOW());

SELECT * FROM users;

SELECT * FROM events;

SELECT * FROM purchases;
