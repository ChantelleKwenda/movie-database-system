<?php
include 'db.php';

$result = $conn->query("SELECT * FROM Genre");

echo "<h2>Genres</h2>";
echo "<table border='1'>
<tr><th>ID</th><th>Name</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['genre_id']}</td>
        <td>{$row['name']}</td>
    </tr>";
}

echo "</table>";
?>