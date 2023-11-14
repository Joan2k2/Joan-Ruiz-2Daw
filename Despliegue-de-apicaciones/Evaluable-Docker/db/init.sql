USE bddjoanevaluable;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255)
);

INSERT INTO usuarios (name) VALUES ('Joan Ruiz');
INSERT INTO usuarios (name) VALUES ('Vicent Monfort');
