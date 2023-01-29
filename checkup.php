<?php
    // Connect to the database
    $connection = mysqli_connect("hostname", "username", "password", "database_name");

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create the SQL query
    $sql = "SELECT * FROM table_name";

    // Execute the query and store the result
    $result = mysqli_query($connection, $sql);

    // Check if the query returned any results
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Column 1</th>";
        echo "<th>Column 2</th>";
        echo "<th>Column 3</th>";
        echo "</tr>";

        // Output the data for each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["column_1"] . "</td>";
            echo "<td>" . $row["column_2"] . "</td>";
            echo "<td>" . $row["column_3"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No results found.";
    }

    // Close the connection
    mysqli_close($connection);
?>
