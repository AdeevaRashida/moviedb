<?php 

    require 'php/function.php';

    // variable untuk menampung id yang diambil dari database
    $id = $_GET["id"];

    if(hapusData($id) > 0){
        echo "<script>
                alert('It has been done!');
                document.location.href='homepage.php';
        </script>";
    } else {
        echo "<script>
                alert('Unfortunately it cannot be done,,');
                document.location.href='homepage.php';
        </script>";
    }

?>