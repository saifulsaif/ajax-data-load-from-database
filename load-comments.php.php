<?php
include 'db.php';
$commentNewCount = $_POST['commnetNewCount'];
$sql = "SELECT * FROM comments limit 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<p>";
        echo " " . $row["author"] . "</br> " . $row["message"] . "<br/>";
        echo "</p>";
    }
} else {
    echo "0 results";
}
?>