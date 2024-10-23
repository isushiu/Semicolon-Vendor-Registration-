<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        /* Custom CSS to adjust the input field and search button spacing */
        .input-group .form-control {
            margin-right: 5px; /* Add margin to the right of the input field */
        }
    </style>
</head>

<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">SEMICOLON Tech</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page"></li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Staff Page</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <form id="searchForm" onsubmit="handleSearch(event)">
                                <div class="input-group mb-3">
                                    <input type="text" id="searchInput" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control" placeholder="Search">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<!-- JavaScript for handling the search query -->
<script>
function handleSearch(event) {
    event.preventDefault(); // Prevent the default form submission
    var query = document.getElementById('searchInput').value.toLowerCase(); // Get the search query and convert to lowercase

    // Redirect based on the search query
    if (query === 'staff registration') {
        window.location.href = 'insert.php';
    } else if (query === 'vendor owner registration' || query === 'customer register' || query == 'vendor owner register' || query === 'vendor register') {
        window.location.href = 'insertVendorOwner.php';
    } else if (query === 'logout') {
        window.location.href = '../../vendors/logout.php';
    } else {
        alert('No matching page found for the entered query.');
    }
}
</script>
