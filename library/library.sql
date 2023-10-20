CREATE TABLE library (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    adm_no VARCHAR(50) NOT NULL,
    book_title VARCHAR(255) NOT NULL,
    book_number VARCHAR(20) NOT NULL,
    author VARCHAR(100) NOT NULL
);
