USE Joruma02;

CREATE TABLE IF NOT EXISTS usuarios (
    
    name VARCHAR(255) ,
    edad INT,
    estilo VARCHAR(255)
);

INSERT INTO usuarios (name,edad,estilo) VALUES ('Joan Ruiz',21,'Techno');
INSERT INTO usuarios (name,edad,estilo) VALUES ('Vicent Monfort',30,'Techno');
