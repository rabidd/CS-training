<?php
// Include config file
require_once "config.php";

// Attempt select query execution
$sql = "SELECT * FROM employees";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table id='dtBasicExample' class='table table-striped table-bordered table-sm' cellspacing='0' width='100%''>";
        echo "<thead>";
        echo "<tr class='table-heading'>";
        echo "<th class='th-sm'>#</th>";
        echo "<th class='th-sm'>Name</th>";
        echo "<th class='th-sm'>Address</th>";
        echo "<th class='th-sm'>Salary</th>";
        echo "<th class='th-sm'>Action</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr class='table-content'>";
            echo "<td class='table-content'>" . $row['id'] . "</td>";
            echo "<td class='table-content'>" . $row['name'] . "</td>";
            echo "<td class='table-content'>" . $row['address'] . "</td>";
            echo "<td class='table-content'>" . $row['salary'] . "</td>";
            echo "<td class='table-content'>";
            echo "<a href='crud/read/read.php?id=" . $row['id'] . "' title='View Record' data-toggle='tooltip'><i class='far fa-eye'></i></a>";
            echo "<a href='crud/update/update.php?id=" . $row['id'] . "' title='Update Record' data-toggle='tooltip'><i class='fas fa-pencil-alt'></i></a>";
            echo "<a href='crud/delete/delete.php?id=" . $row['id'] . "' title='Delete Record' data-toggle='tooltip'><i class='fas fa-trash-alt'></i></a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "<p class='lead'><em>No records were found.</em></p>";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>

