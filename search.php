<?php
// Include database connection file
include("db.php");

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve search criteria from form
    $destination = $_POST['where_to_go'];
    $date = $_POST['date'];
    $travel_type = $_POST['travel_type'];

    // Perform search query (example)
    $query = "SELECT * FROM search WHERE where_to_go='$destination' ";

    // You can add more conditions to the query based on other search criteria

    // Execute query
    $result = mysqli_query($conn, $query);

    // Check if query was successful
    if ($result) {
        // Fetch and return results as JSON
        $search_results = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($search_results);
    } else {
        // Handle error
        echo json_encode(array('error' => 'An error occurred while performing the search.'));
    }
} else {
    // Handle invalid request method
    echo json_encode(array('error' => 'Invalid request method.'));
}
?>
