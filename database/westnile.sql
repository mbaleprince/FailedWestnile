/* Westnile database */
CREATE DATABASE IF NOT EXISTS westnile;

/* Vertify table */
CREATE TABLE verify (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    user_password VARCHAR(100) NOT NULL,
    code VARCHAR(100) NOT NULL
);

/*Users table */

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    user_password VARCHAR(100) NOT NULL,
    profile_pic_url VARCHAR(2000),
    verified VARCHAR(25),
    bio VARCHAR(2000),
    datecreated TIMESTAMP NOT NULL DEFAULT NOW()
);

/* Blog table */

CREATE TABLE blog (
    id INT PRIMARY KEY AUTO_INCREMENT,
    datecreated TIMESTAMP NOT NULL DEFAULT NOW(),
    readingtime TEXT NOT NULL,
    title VARCHAR(200),
    content TEXT NOT NULL,
    readers VARCHAR(200),
    voted_true VARCHAR(200),
    voted_false VARCHAR(200),
    image_url VARCHAR(200),
    category VARCHAR(200),
    writer INT NOT NULL,
    CONSTRAINT fk_user FOREIGN KEY (writer) REFERENCES users(id) ON DELETE CASCADE ON UPDATE RESTRICT
);