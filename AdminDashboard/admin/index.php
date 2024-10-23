<?php include('dbconfig/dbconfig.php'); ?>
<?php include('includes/header.php'); ?>

<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="card card-plain mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <h2 class="font-weight-bolder mb-0">Semicolon Tech</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
            if(isset($_SESSION['status']) && $_SESSION['status'] != '') {
                ?>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                unset($_SESSION['status']);
            }
            ?>

            <!-- staff -->
            <div class="card mt-3">
                <div class="card-header">
                    <h4>
                        STAFF REGISTRATION
                        <a href="insert.php" class="btn btn-primary float-end">Insert Data</a>
                        <form action="search.php" method="GET" class="d-inline-block float-end me-3">
                            <input type="text" name="search" class="form-control d-inline-block" placeholder="Search by name" required>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </h4>
                    <p>Insert the new employee data here.</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $fetch_query = "SELECT Admin_Name, Admin_Email, Admin_Phone, Admin_Username, created_at FROM admin";
                                $fetch_query_run = mysqli_query($connection, $fetch_query);
                                if(mysqli_num_rows($fetch_query_run) > 0) {
                                    foreach($fetch_query_run as $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['Admin_Name']; ?></td>
                                            <td><?php echo $row['Admin_Email']; ?></td>
                                            <td><?php echo $row['Admin_Phone']; ?></td>
                                            <td><?php echo $row['Admin_Username']; ?></td>
                                            <td><?php echo $row['created_at']; ?></td>
                                            <td>
                                                <a href="edit.php?name=<?php echo urlencode($row['Admin_Name']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="6">No record found</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- vendor -->
            <div class="card mt-3">
                <div class="card-header">
                    <h4>
                        VENDOR OWNER REGISTRATION
                        <a href="insertVendorOwner.php" class="btn btn-primary float-end">Insert Data</a>
                        <form action="searchVendorsOwner.php" method="GET" class="d-inline-block float-end me-3">
                            <input type="text" name="search" class="form-control d-inline-block" placeholder="Search by name" required>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </h4>
                    <p>Insert the new vendor owner data here.</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">IC</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $fetch_query = "SELECT CUST_IC, CUST_NAME, CUST_USERNAME, CUST_PASS, CUST_EMAIL, CUST_PNUM FROM vendorsowner";
                                $fetch_query_run = mysqli_query($connection, $fetch_query);
                                if(mysqli_num_rows($fetch_query_run) > 0) {
                                    foreach($fetch_query_run as $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['CUST_IC']; ?></td>
                                            <td><?php echo $row['CUST_NAME']; ?></td>
                                            <td><?php echo $row['CUST_USERNAME']; ?></td>
                                            <td><?php echo $row['CUST_PASS']; ?></td>
                                            <td><?php echo $row['CUST_EMAIL']; ?></td>
                                            <td><?php echo $row['CUST_PNUM']; ?></td>
                                            <td>
                                                <a href="editVendorsOwner.php?name=<?php echo urlencode($row['CUST_NAME']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="7">No record found</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
