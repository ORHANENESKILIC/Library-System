<?php error_reporting(0);
 $connect = @new mysqli('localhost', 'root', '', 'library_registration');
 $connect->set_charset("utf8");

 if ($connect->connect_errno) {
  die("mySQL Connection Failed: " . $connect->connect_error);
 }

?>
<?php
include("Back-End/db.php");

$query=$db->prepare('select * from books');
$query->execute();
$booklist=$query-> fetchAll(PDO::FETCH_OBJ);


?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Library Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    </head>
    <body>
    
    <!-- Navbar -->
    <div class="w3-top">
      <div class="w3-bar w3-red w3-card w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
        <a href="book_registration.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Book Registration</a>
        <a href="books_list.php" class="w3-bar-item w3-button w3-padding-large w3-white">all books</a>
        
      </div>
    
      <!-- Navbar on small screens -->
      <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="book_registration.php" class="w3-bar-item w3-button w3-padding-large">Book Registration</a>
        <a href="books_list.php" class="w3-bar-item w3-button w3-padding-large">All Books</a>
      </div>
    </div>
    
    <!-- Header -->
    <header class="w3-container w3-red w3-center" style="padding:50px 16px">
      <h1 class="w3-margin w3-jumbo">All Books</h1>
      <a href="book_registration.php" class="w3-button w3-green w3-padding-large w3-large w3-margin-top">Book Registration</a><br>
    </header>
      
<table >
  <tr>
    <th>Number</th>
    <th>Book Name</th>
    <th>Author Name</th>
    <th>Publisher Name</th>
    <th>categorie</th>    
    <th>Abouth</th>              
    <th>Progress</th>
  </tr>
  <?php 
  foreach($booklist as $book){?>
			  
			<tr>
        <td><?= $book->id ?></td>
			  <td><?= $book->Book_Name ?></td>
			  <td><?= $book->Author ?></td>
			  <td><?= $book->Publisher ?></td>
        <td><?= $book->Categorie ?></td>
        <td><?= $book->Book_About ?></td>
              <td>
                <a href="Back-End/book_delete.php?id=<?php echo $book->id; ?>" ><button style="background:#ff0000" >Delete</button></a>
                <a href="book_update.php?id=<?php echo $book->id; ?>"> <button style="background:#00c44e">Update</button></a> 
              </td>
<?php } ?>
</table>

    
    </body>
    </html>