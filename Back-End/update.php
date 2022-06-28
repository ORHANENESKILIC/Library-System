<?php

$db = new PDO("mysql:host=localhost;dbname=library_registration;charset=utf8", "root", "");


$newname = $_POST['book'];
$newauthor = $_POST['author'];
$newpublisher = $_POST['publisher'];
$newcategorie = $_POST['categorie'];
$newabout = $_POST['about'];


if (!$newname || !$newauthor || !$newpublisher || !$newcategorie || !$newabout ) {
    die("there are empty fields !.");
}

$add = $db->prepare("UPDATE books SET Book_Name = ?, Author = ?, Publisher = ?, Categorie = ?, Book_About = ?");
$add->execute([$newname, $newauthor, $newpublisher, $newcategorie, $newabout]);

if ($add) {
    echo '<script>alert("transaction successful")</script>';
    header("refresh:1; url=../books_list.php");
}else {
    echo "there was a mistake :( ";
}

?>
