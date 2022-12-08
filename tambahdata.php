<?php 

    require 'php/function.php';

    if(isset($_POST["submit"])){
        if(tambahData($_POST) > 0){
            echo "<script>
                alert('The Movie has been submitted!');
                document.location.href='homepage.php';
            </script>";
        }else{
            echo "<script>
                alert('Perhaps, something went wrong,,,?');
                document.location.href='homepage.php';
            </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sttyle.css">
    <title>Add Movies</title>
</head>
<body>

    <h1 class="wa">Add Movies</h1>

    <form class="formm" action="<?php $_SERVER["PHP_SELF"]?>" method="post">
            <input class="inputt" type="text" name="movieName" placeholder="Title" required>
            <br><br>
            <input class="inputt" type="text" name="genreId" placeholder="Genre Number" required>
            <br><br>
            <input class="inputt" type="text" name="movieDesc" placeholder="Description" required>
            <br><br>
            <input class="inputt" type="text" name="producedBy" placeholder="Produced By" required>
            <br><br>
            <input class="inputt" ype="text" name="directedBy" placeholder="Directed By" required>
            <br><br>
            <input class="inputt" type="text" name="starring" placeholder="Starring" required>
            <br><br>
            <input class="inputt" type="text" name="images" placeholder="Movie Poster" required>
            <br><br>
            <button class="input-button" type="submit" name="submit">Add new movie</button>
        </form>
    
</body>
</html>