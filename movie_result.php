<?php
include 'db.php';

$from = $_POST['from_year'];
$to = $_POST['to_year'];

$sql = "
SELECT 
    m.title,
    m.year,
    m.length,
    g.name AS genre,
    d.name AS director,
    pc.name AS company
FROM Movie m
JOIN MovieGenre mg ON m.movie_id = mg.movie_id
JOIN Genre g ON mg.genre_id = g.genre_id
JOIN MovieDirector md ON m.movie_id = md.movie_id
JOIN Director d ON md.director_id = d.director_id
LEFT JOIN ProductionCompany pc ON m.company_id = pc.company_id
WHERE m.year BETWEEN $from AND $to
ORDER BY m.year
";

$result = $conn->query($sql);

echo "<h2>Movie Results</h2>";
echo "<table border='1'>";
echo "<tr>
<th>Title</th>
<th>Year</th>
<th>Genre</th>
<th>Director</th>
<th>Company</th>
<th>Length</th>
</tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['title']}</td>
        <td>{$row['year']}</td>
        <td>{$row['genre']}</td>
        <td>{$row['director']}</td>
        <td>{$row['company']}</td>
        <td>{$row['length']}</td>
    </tr>";
}

echo "</table>";

$conn->close();
?>