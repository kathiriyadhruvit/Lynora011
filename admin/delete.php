    <?php
    include '../conn.php';

    // Check if table && id
    if (isset($_GET['table'])) {
        $p_id = $_GET['p_id'];

        // Prepare and execute DELETE queries for each product table
        $query1 = mysqli_query($con, "DELETE FROM treading_product WHERE p_id = $p_id");
        $query2 = mysqli_query($con, "DELETE FROM car WHERE p_id = $p_id");
        $query3 = mysqli_query($con, "DELETE FROM bike WHERE p_id = $p_id");
        $query4 = mysqli_query($con, "DELETE FROM jeep WHERE p_id = $p_id");

        // Check if deletion was successful from at least one table
        if ($query1 && $query2 && $query3 && $query4) {
            echo '<script>alert("Product deleted successfully!");</script>';
            header("Location: AdminPanel.php"); // Redirect to product list page
            exit;
        } else {
            echo "Error deleting product: " . mysqli_error($con);
        }
    } else {
        echo "Invalid parameters.";
        exit;
    }
    ?>
