<?php
    $conn = mysqli_connect("localhost", "root", "", "moviedb");

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambahData($data){
        global $conn;
        $name = htmlspecialchars($data["movieName"]);
        $genre = htmlspecialchars($data["genreId"]);
        $desc = htmlspecialchars($data["movieDesc"]);
        $produced = htmlspecialchars($data["producedBy"]);
        $directed = htmlspecialchars($data["directedBy"]);
        $actors = htmlspecialchars($data["starring"]);
        $img = htmlspecialchars($data["images"]);

        $query = "INSERT INTO movie VALUES('', '$name', '$genre', '$desc', '', '', '', '', '$produced', '$directed', '$actors', '$img')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapusData($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM movie WHERE movieId = $id");

        return mysqli_affected_rows($conn);
    }

?>