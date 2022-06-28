<?php error_reporting(0);
 $connection = @new mysqli('localhost', 'root', '', 'library_registration');
 $connection->set_charset("utf8");

 if ($connection->connect_errno) {
  die("mySQL Connection Failed: " . $connection->connect_error);
 }

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
        <a href="book_registration.php" class="w3-bar-item w3-button w3-padding-large w3-white">Book Registration</a>
        <a href="books_list.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">all books</a>
        
      </div>
    
      <!-- Navbar on small screens -->
      <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="book_registration.php" class="w3-bar-item w3-button w3-padding-large">Book Registration</a>
        <a href="books_list.php" class="w3-bar-item w3-button w3-padding-large">all books</a>
      </div>
    </div>
    
    <!-- Header -->
    <header class="w3-container w3-red w3-center" style="padding:50px 16px">
      <h1 class="w3-margin w3-jumbo">Book Registration</h1>
    </header>
    
    <div class="container">
        <form action="Back-End/book_save.php" method="POST">
          <div class="row">
            <div class="col-25">
              <label for="book">Book Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="book" name="book" placeholder="Book name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="author">Author Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="author" name="author" placeholder="Author name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="publisher">Publisher Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="publisher" name="publisher" placeholder="Publisher name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="categorie">categorie</label>
            </div>
            <div class="col-75">
              <select id="categorie" name="categorie">
              <option value="Select Categorie">Select Categorie</option>
                <option value="Autobiography">Autobiography</option>
                <option value="Biography">Biography</option>
                <option value="Health and Wellness">Health and Wellness</option>
                <option value="Documentary ">Documentary </option>
                <option value="Philosophy ">Philosophy </option>
                <option value="History">History</option>
                <option value=" Self-Help"> Self-Help</option>
                <option value="Crime">Crime</option>
                <option value="Drama">Drama</option>
              </select>
            </div>
          </div>


          <div class="row">
            <div class="col-25">
              <label for="about">About</label>
            </div>
            <div class="col-75">
              <input type="text" id="about" name="about" placeholder="Write something.." style="height:200px; width:900px">
            </div>
          </div>

          <div >
            <input type="submit" value="SAVE">
          </div>
        </form>
      </div>
      
    
    </body>
    </html>