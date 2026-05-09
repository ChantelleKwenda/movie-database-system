<?php
include 'db.php';

$result = $conn->query("SELECT * FROM Movie");

echo "<h2>Movies</h2>";
echo "<table border='1'>
<tr><th>ID</th><th>Title</th><th>Year</th><th>Length</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['movie_id']}</td>
        <td>{$row['title']}</td>
        <td>{$row['year']}</td>
        <td>{$row['length']}</td>
    </tr>";
}

echo "</table>";
?>