$name="hasnain";
$result = mysqli_query($conn, "SELECT * FROM testing
    WHERE name LIKE '%{$name}%' ");

while ($row = mysqli_fetch_array($result))
{
        echo $row['name'] . " " . $row['value'];
        echo "<br>";
}