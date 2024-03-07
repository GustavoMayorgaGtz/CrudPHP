use itsl; 
create table peliculas (
idp int primary key auto_increment,
titulo varchar(100) not null,
genero varchar(100) not null,
duracion varchar(50) not null,
clasificacion int(30) not null
);

-- Insertar 10 películas de ejemplo con formato de tiempo "1:45 hr"
INSERT INTO peliculas (titulo, genero, duracion, clasificacion)
VALUES 
  ('Inception', 'Ciencia Ficción', '2:28 hr', 14),
  ('Titanic', 'Romance', '3:15 hr', 12),
  ('The Shawshank Redemption', 'Drama', '2:22 hr', 18),
  ('The Godfather', 'Crimen', '2:55 hr', 16),
  ('Avatar', 'Aventura', '2:42 hr', 12),
  ('Pulp Fiction', 'Crimen', '2:34 hr', 18),
  ('Forrest Gump', 'Drama', '2:22 hr', 12),
  ('The Dark Knight', 'Acción', '2:32 hr', 16),
  ('Jurassic Park', 'Aventura', '2:07 hr', 12),
  ('The Matrix', 'Ciencia Ficción', '2:16 hr', 16);
