<?php
require "dbconnect.php";

$bookTitle = $_REQUEST['book_title'];
$author = $_REQUEST['author'];
$isbn = $_REQUEST['isbn'];

$sql = "INSERT INTO library_books (book_title, author, isbn) VALUES ('$bookTitle', '$author', '$isbn')";

if ($conn->query($sql) === true) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
