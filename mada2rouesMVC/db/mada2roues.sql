CREATE USER 'amboara'@'localhost' IDENTIFIED BY '';
GRANT ALL PRIVILEGES ON m2ramboara.* TO 'amboara'@'localhost';

CREATE DATABASE m2ramboara CHARACTER SET 'utf8';

USE m2ramboara;

CREATE TABLE IF NOT EXISTS Presentation (
    id SMALLINT UNSIGNED AUTO_INCREMENT,
    titre VARCHAR(20) NOT NULL,
    contenu TEXT,

    PRIMARY KEY (id)
);

INSERT INTO Presentation (titre, contenu)
VALUES ('Accueil','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto natus officia laudantium repudiandae dolorem repellendus soluta accusantium est quasi odio? Impedit nisi tenetur deleniti eius fugiat rem aliquam nostrum accusantium.
\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nulla maxime, delectus, asperiores aperiam beatae corrupti itaque neque quasi sunt nemo nihil at nisi omnis? Facilis distinctio veniam aut nulla beatae?
\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur consequuntur obcaecati eum inventore. Cumque dolores quibusdam delectus architecto officia placeat blanditiis at iste exercitationem ratione. Delectus amet perferendis quia facilis.');
INSERT INTO Presentation (titre, contenu)
VALUES ('Historique', 'Ce site a vu le jour en 2021.
\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur consequuntur obcaecati eum inventore. Cumque dolores quibusdam delectus architecto officia placeat blanditiis at iste exercitationem ratione. Delectus amet perferendis quia facilis.');
INSERT INTO Presentation (titre, contenu)
VALUES ('A propos', 'Ce site a été réalisé par ....
\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur consequuntur obcaecati eum inventore. Cumque dolores quibusdam delectus architecto officia placeat blanditiis at iste exercitationem ratione. Delectus amet perferendis quia facilis.');
INSERT INTO Presentation (titre, contenu)
VALUES ('Contact', 'Tel: +261 32 00 123 45
\nE-mail: mada2roues@gmail.com');