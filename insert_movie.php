<?php
include 'db.php';

// SAFE INPUT CHECK (prevents undefined errors)
$title = $_POST['title'];
$year = $_POST['year'];
$length = $_POST['length'];
$plot = $_POST['plot'];

$genre_id = $_POST['genre_id'];
$director_id = $_POST['director_id'];

// Insert Movie
$sql = "INSERT INTO Movie (title, year, length, plot)
VALUES ('$title', '$year', '$length', '$plot')";

if ($conn->query($sql) === TRUE) {

    $movie_id = $conn->insert_id;

    // Insert Genre (correct FK usage)
    $conn->query("INSERT INTO MovieGenre (movie_id, genre_id)
    VALUES ($movie_id, $genre_id)");

    // Insert Director
    $conn->query("INSERT INTO MovieDirector (movie_id, director_id)
    VALUES ($movie_id, $director_id)");

    echo "Movie inserted successfully!";

} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>