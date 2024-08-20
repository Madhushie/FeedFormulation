<?php
require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if (!securePage($_SERVER['PHP_SELF'])) {
    die();
}
?>

<head>
    <script src="js/getAllIngredientsHandler.js"></script>
</head>

<body onload="initPage()">
    <div class="container-fluid mt-3">
        <h2>Ingredients</h2>
        <div class="row my-3">
            <div class="col-md-6 align-items-center d-flex">
                <div class="col-10">
                    <input type="text" id="searchInput" class="form-control rounded-4 bg-white py-2 px-3" placeholder="Search Ingredients" onkeyup="searchTable()">
                </div>
            </div>
            <div class="col-md-6 justify-content-end align-items-center d-flex">
                <a href="add_ingredient.php" class="btn btn-primary py-2 px-4 small mx-1">Add Ingredient <i class="fa fa-plus fs-6" aria-hidden="true"></i></a>
                <div class="dropdown mx-2">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Sort By <i class="fa fa-filter fs-6" aria-hidden="true"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Name</a></li>
                        <li><a class="dropdown-item" href="#">Code</a></li>
                    </ul>
                </div>
                <div class="dropdown mx-2">
                    <button class="btn" type="button" id="moreDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v fs-5 d-flex align-items-center" aria-hidden="true"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="moreDropdown">
                        <li><button type="button" class="dropdown-item bg-danger text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="table-responsive d-flex text-center my-4">
            <!-- Ingredients Table -->
            <table class="table custom-table" id="ingredientsTable">
                <thead>
                    <tr>
                        <th class="p-3" scope="col"><br/><input class="form-check-input" type="checkbox" value="" id="selectAllCheckbox"></th>
                        <th class="p-3 align-middle" scope="col">Code</th>
                        <th class="p-3 align-middle" scope="col">Name</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <!-- Overflow Table -->
            <div class="overflow-auto" style="flex: 1;">
                <table class="table" id="overflowTable">
                    <thead></thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5">Do you want to permanently delete this?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</body>

<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>