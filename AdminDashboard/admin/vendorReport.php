<?php include('includes/header.php'); ?>

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h4>
                        Vendor Report

                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                <form action="code2.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputID1" class="form-label">Vendor ID</label>
                        <input type="number" class="form-control" name="Vendor_ID" id="exampleInputID1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Vendor Name</label>
                        <input type="text" class="form-control" name="Vendor_Name" id="exampleInputName1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Vendor Email</label>
                        <input type="email" class="form-control" name="Vendor_Email" id="exampleInputEmail1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputProfit1" class="form-label">Vendor Profit</label>
                        <input type="number" class="form-control" name="Vendor_Profit" id="exampleInputProfit1" required>
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
