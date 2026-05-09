<?php
include 'db.php';

$sql = "
SELECT 
    d.name AS director,
    m.title,
    m.year,
    g.name AS genre
FROM Director d
JOIN MovieDirector md ON d.director_id = md.director_id
JOIN Movie m ON md.movie_id = m.movie_id
JOIN MovieActor ma ON ma.movie_id = m.movie_id
JOIN Actor a ON a.actor_id = ma.actor_id
JOIN MovieGenre mg ON m.movie_id = mg.movie_id
JOIN Genre g ON mg.genre_id = g.genre_id
WHERE d.name = a.name
";

$result = $conn->query($sql);

echo "<h2>Director Acting in Own Movie</h2>";
echo "<table border='1'>";
echo "<tr>
<th>Director</th>
<th>Movie</th>
<th>Year</th>
<th>Genre</th>
</tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['director']}</td>
            <td>{$row['title']}</td>
            <td>{$row['year']}</td>
            <td>{$row['genre']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No results found</td></tr>";
}

echo "</table>";

$conn->close();
?>