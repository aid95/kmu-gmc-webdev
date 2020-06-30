CREATE TABLE Account (
    pk INT NOT NULL AUTO_INCREMENT,
    id VARCHAR(30) NOT NULL,
    pw VARCHAR(80) NOT NULL,
    profile_image TEXT NOT NULL DEFAULT 'default.jpg',
    nickname VARCHAR(32) NOT NULL,
    perm INT NOT NULL DEFAULT 0,
    created_date DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (pk)
);

CREATE TABLE Category (
    pk INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(30) NOT NULL,

    PRIMARY KEY (pk)
);

CREATE TABLE Board (
    pk INT NOT NULL AUTO_INCREMENT,
    category_pk INT,
    title VARCHAR(30) NOT NULL,
    description VARCHAR(120) NOT NULL,

    PRIMARY KEY (pk),
    FOREIGN KEY (category_pk) REFERENCES Category(pk) ON DELETE SET NULL
);

CREATE TABLE Article ( 
    pk INT NOT NULL AUTO_INCREMENT,
    user_pk INT,
    board_pk INT,
    title VARCHAR(60) NOT NULL,
    content TEXT NOT NULL,
    photo TEXT DEFAULT '',
    created_date DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (pk),
    FOREIGN KEY (user_pk) REFERENCES Account(pk) ON DELETE CASCADE,
    FOREIGN KEY (board_pk) REFERENCES Board(pk) ON DELETE CASCADE
);

CREATE TABLE Comment (
    pk INT NOT NULL AUTO_INCREMENT,
    user_pk INT,
    article_pk INT,
    content TEXT NOT NULL,
    created_date DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (pk),
    FOREIGN KEY (user_pk) REFERENCES Account(pk) ON DELETE CASCADE,
    FOREIGN KEY (article_pk) REFERENCES Article(pk) ON DELETE CASCADE
);
