<?php
include 'db_connect.php';

$sql = "SELECT id, first_name, last_name, specialty, phone_number, email, address FROM physicians";
$result = $conn->query($sql);

echo "<h1>Physicians List</h1>";

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Specialty</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Address</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["first_name"]. "</td>
                <td>" . $row["last_name"]. "</td>
                <td>" . $row["specialty"]. "</td>
                <td>" . $row["phone_number"]. "</td>
                <td>" . $row["email"]. "</td>
                <td>" . $row["address"]. "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
