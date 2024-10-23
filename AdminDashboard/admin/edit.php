<?php include('dbconfig/dbconfig.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Edit
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">
                    <?php
                    // Enable error reporting
                    error_reporting(E_ALL);
                    ini_set('display_errors', 1);

                    // Check if 'name' parameter is set in $_GET
                    if (isset($_GET['name'])) {
                        $name = $_GET['name'];
                        $fetch_query = "SELECT * FROM admin WHERE Admin_Name = '$name'";
                        $fetch_query_run = mysqli_query($connection, $fetch_query);

                        // Check if query execution was successful
                        if ($fetch_query_run) {
                            if (mysqli_num_rows($fetch_query_run) > 0) {
                                foreach ($fetch_query_run as $row) {
                                    ?>
                                    <form action="code.php" method="POST">
                                        <div class="mb-3">
                                            <label for="admin_Name" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="admin_Name" value="<?php echo $row['Admin_Name']; ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="admin_Email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" name="admin_Email" value="<?php echo $row['Admin_Email']; ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="admin_Phone" class="form-label">Phone Number</label>
                                            <input type="number" class="form-control" name="admin_Phone" value="<?php echo $row['Admin_Phone']; ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="admin_Username" class="form-label">Username</label>
                                            <input type="text" class="form-control" name="admin_Username" value="<?php echo $row['Admin_Username']; ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="admin_Password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="admin_Password" value="<?php echo $row['Admin_Password']; ?>" required>
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
                        echo "Name parameter not set";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
