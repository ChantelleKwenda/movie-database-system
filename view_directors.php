<?php
include 'db.php';

$result = $conn->query("SELECT * FROM Director");

echo "<h2>Directors</h2>";
echo "<table border='1'>
<tr><th>ID</th><th>Name</th><th>DOB</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['director_id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['dob']}</td>
    </tr>";
}

echo "</table>";
?>