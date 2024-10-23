<?php
// Include database configuration and header
include('dbconfig/dbconfig.php');
include('includes/header.php');
?>

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Edit Customer
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">
                    <?php
                    // Enable error reporting   
                    error_reporting(E_ALL);
                    ini_set('display_errors', 1);

                    // Check if 'cust_ic' parameter is set in $_GET
                    if (isset($_GET['name'])) {
                        $name = $_GET['name'];
                        $fetch_query = "SELECT * FROM vendorsowner WHERE CUST_NAME = '$name'";
                        $fetch_query_run = mysqli_query($connection, $fetch_query);

                        // Check if query execution was successful
                        if ($fetch_query_run) {
                            if (mysqli_num_rows($fetch_query_run) > 0) {
                                foreach ($fetch_query_run as $row) {
                                    ?>
                                    <form action="insertProcessVendorOwner.php" method="POST">
                                        <div class="mb-3">
                                            <label for="CUST_IC" class="form-label">Customer IC</label>
                                            <input type="text" class="form-control" name="CUST_IC" value="<?php echo $row['CUST_IC']; ?>" required readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="CUST_NAME" class="form-label">Customer Name</label>
                                            <input type="text" class="form-control" name="CUST_NAME" value="<?php echo $row['CUST_NAME']; ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="CUST_USERNAME" class="form-label">Customer Username</label>
                                            <input type="text" class="form-control" name="CUST_USERNAME" value="<?php echo $row['CUST_USERNAME']; ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="CUST_PASS" class="form-label">Customer Password</label>
                                            <input type="password" class="form-control" name="CUST_PASS" value="<?php echo $row['CUST_PASS']; ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="CUST_EMAIL" class="form-label">Customer Email</label>
                                            <input type="email" class="form-control" name="CUST_EMAIL" value="<?php echo $row['CUST_EMAIL']; ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="CUST_PNUM" class="form-label">Customer Phone Number</label>
                                            <input type="text" class="form-control" name="CUST_PNUM" value="<?php echo $row['CUST_PNUM']; ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
                                            <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                                        </div>
                                    </form>
                                    <?php
                                }
                            } else {
                                echo "No record found";
                            }
                        } else {
                            echo "Query failed: " . mysqli_error($connection);
                        }
                    } else {
                        echo "Customer IC parameter not set";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
