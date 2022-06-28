<?php

$db = new PDO("mysql:host=localhost;dbname=library_registration;charset=utf8", "root", "");


$name = $_POST['book'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$categorie = $_POST['categorie'];
$about = $_POST['about'];


if (!$name || !$author || !$publisher || !$categorie || !$about ) {
    die("there are empty fields !.");
}

$add = $db->prepare("INSERT INTO books SET Book_Name = ?, Author = ?, Publisher = ?, Categorie = ?, Book_About = ?");
$add->execute([$name, $author, $publisher, $categorie, $about]);

if ($add) {
    echo '<script>alert("transaction successful")</script>';
    header("refresh:1; url=../book_registration.php");
}else {
    echo "there was a mistake :( ";
}

?>
