<!DOCTYPE html>
<html>
<body>

<h2>Add Movie</h2>

<form action="insert_movie.php" method="POST">

    Title: <input type="text" name="title" required><br><br>

    Year: <input type="number" name="year" required><br><br>

    Length: <input type="number" name="length" required><br><br>

    Plot: <textarea name="plot" required></textarea><br><br>

    Genre ID: <input type="number" name="genre_id" required><br><br>

    Director ID: <input type="number" name="director_id" required><br><br>

    <input type="submit" value="Add Movie">

</form>

</body>
</html>