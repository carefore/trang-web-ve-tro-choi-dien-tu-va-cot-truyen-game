CREATE DATABASE IF NOT EXISTS game_database;
USE game_database;

CREATE TABLE IF NOT EXISTS players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    game_story TEXT NOT NULL
);
