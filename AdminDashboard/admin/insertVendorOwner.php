<?php include('includes/header.php'); ?>

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h4>
                        Vendor Owner Registration

                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                <form action="insertProcessVendorOwner.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Customer IC</label>
                        <input type="text" class="form-control" name="CUST_IC" id="exampleInputEmail1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" name="CUST_NAME" id="exampleInputEmail1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Customer Username</label>
                        <input type="text" class="form-control" name="CUST_USERNAME" id="exampleInputPassword1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Customer Password</label>
                        <input type="password" class="form-control" name="CUST_PASS" id="exampleInputPassword1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Customer Email</label>
                        <input type="email" class="form-control" name="CUST_EMAIL" id="exampleInputEmail1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Customer Phone Number</label>
                        <input type="text" class="form-control" name="CUST_PNUM" id="exampleInputEmail1" required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="save_btn" class="btn btn-primary">Submit</button>
                    </div>
                </form>


                </div>
            </div>

        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>