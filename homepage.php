<?php 
    require 'php/function.php';
    require 'php/auth_session.php';
    $movie = query("SELECT * FROM movie");
    $users = query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vomilist</title>
    <link rel="stylesheet" href="sttyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="script.js"></script>
</head>
<body style="background-color:rgb(26, 26, 26)">
    
    <header>
        <nav class="navbar">
            <h1> VOMILIST </h1>
            <ul class="link-group">
                <li class="linkk"><a href="#list">Movies</a></li>
                <li class="linkk"><a href="">Reviews</a></li>
                <li class="linkk"><a href="tambahdata.php">Add</a></li>
                <div class="dropdown">
                    <div>
                        <button class="dropdown-button"><?php echo $_SESSION['username']; ?></button>
                        <img src="img/" alt="">
                    </div>
                    <div class="dropdown-content">
                        <li class="linkk"><a href="logout.php">Logout</a></li>
                    </div>
                </div>
            </ul>
          </nav>
    </header>

    <div id="welcome">

        <div class="welcome">
            <div class="text-1">Hello <span class="username"><?php echo $_SESSION['username'];?>!</span></div>
            <div class="text-2">Welcome to Vomilist, The best movie website you'll ever find.</div>
        </div>

        <div id="slider">
            <ul id="slideWrap">
                <li><img src="img/mrsbanner.jpg" alt=""></li>
                <li><img src="img/pixelsbanner.jpg" alt=""></li>
                <li><img src="img/bannersandman.png" alt=""></li>
                <li><img src="img/shangchobanner.jpg" alt=""></li>
            </ul>
            <a id="prev" href="#slider">&#8810;</a>
            <a id="next" href="#slider">&#8811;</a>
        </div>

    </div>

    <div id="list">
        <h1>Movie List</h1>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Movie's</th>
                <th>Description</th>
                <th>Produced By</th>
                <th>Directed By</th>
                <th>Starring</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>

            <?php $i=1 ?>
            <?php  foreach($movie as $row) : ?>

            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row["movieName"] ?></td>
                <td><?= $row["movieDesc"] ?></td>
                <td><?= $row["producedBy"] ?></td>
                <td><?= $row["directedBy"] ?></td>
                <td><?= $row["starring"] ?></td>
                <td><img src="img/<?=$row["images"] ?>" alt="" width="100"></td>
                <td>
                    <a href="hapus.php?id=<?= $row["movieId"];?>" onclick="return confirm('Yakin dihapus?')";>Hapus</a>
                </td>
            </tr>

            <?php $i++ ?>
            <?php endforeach ?>
        </table>
    </div>


    <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social-icon">
            <li class="social-icon__item">
                <a class="social-icon__link" href="https://www.linkedin.com/in/adeeva-rashida-655a44230/">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </li>
            <li class="social-icon__item">
                <a class="social-icon__link" href="https://www.instagram.com/ashida.radee/">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>
    </ul>
    <p>&copy;2022 Adeeva Rashida | All Rights Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>