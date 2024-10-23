<?php include('includes/header.php'); ?>

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h4>
                        Staff Registration

                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                <form action="code.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="admin_Name" id="exampleInputEmail1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="admin_Email" id="exampleInputEmail1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">PhoneNumber</label>
                        <input type="number" class="form-control" name="admin_Phone" id="exampleInputPassword1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Username</label>
                        <input type="text" class="form-control" name="admin_Username" id="exampleInputPassword1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="admin_Password" id="exampleInputPassword1" required>
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
