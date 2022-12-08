<?php 
    require 'php/function.php';
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="script.js"></script>
</head>
<body style="background-image: url(img/Desktop-5.png)">
    
    <header>
        <nav class="navbar">
            <h1> VOMILIST </h1>
            <ul class="link-group">
                <li class="linkk"><a href="login.php">LOGIN</a></li>
            </ul>
          </nav>
    </header>

    <div class="welcomepage">

        <h1><span class="typing"></span></h1>
        <h2>Welcome to <span class="wack">Vomilist</span>,</h2>
        <h3>The <span style="color:#D39E35; font-size: 25px;">Best Movie</span> website you'll ever find.</h3>

        <h3>But first off, let's get you to Log-In.</h3>
        <h5>You can use the obvious button below, or, if you want to  be difficult, use the one on the top-right of the screen.</h5>
        <a href="login.php"><button >Login</button></a>

    </div>


    <script>
      var typed = new Typed(".typing", {
          strings: ["Hello!", "Bonjour!", "Hola!", "Guten tag!", "Salve!", ],
          typeSpeed: 60,
          backSpeed: 60,
          loop: true
      });
    </script>

</body>
</html>