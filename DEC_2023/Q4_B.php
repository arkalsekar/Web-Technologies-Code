<?php
// 1. Initialize connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "arkalsekar";

// 2. Create connection
$conn = new mysqli($servername, $username, $password, $database);

// 3. Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 4. Construct the Read Query
$sql = "SELECT user_id, username, full_name from users";

// 5. Excecute the Query and fetch results
$result = $conn->query($sql);

// 6. Display Results
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["user_id"]. " - Name: " . $row["full_name"]. " - Username: " . $row["username"]. "<br>";
    }
} else {
    echo "0 results";
}


// 7. Close the Connection
$conn->close();

?>
