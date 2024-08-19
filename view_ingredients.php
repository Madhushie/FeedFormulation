<?php
require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if (!securePage($_SERVER['PHP_SELF'])) {
    die();
}

$data = [
    ["Code", "Name", "Dry matter", "Crude protein", "Digestible Protein", "Total lipid", "Carbohydrate", "Total phosphorus", "Calcium", "Ash", "Gross energy", "Digestible energy", "Alanine", "Arginine", "Aspartic acid", "Cysteine", "Glutamic acid", "Glycine", "Histidine", "Isoleucine", "Leucine", "Lysine", "Methionine", "Phenylalanine", "Proline", "Serine", "Taurine", "Threonine", "Tyrosine", "Valine", "C14:0", "C16:0", "C16:1", "C18:0", "C18:1", "C18:2n-6", "C18:3n-3", "C20:4n-6", "C20:5n-3", "C22:6n-3", "SFA", "MUFA", "PUFA", "lcPUFA", "LC n-3", "LC n-6"],
    ["a1", "Fishmeal (anchovey)", 922, 688, 585, 65, 19, 24, 45, 150, 19, 15, 39, 35, 61, 2, 84, 37, 19, 25, 46, 52, 18, 24, 25, 24, 6, 26, 19, 31, 4.0, 13.4, 4.0, 3.2, 5.3, 0.7, 0.5, 0.7, 8.6, 11.0, 21.2, 12.3, 25.2, 22.3, 21.2, 1.1],
    ["a5", "Poultry meal", 950, 660, 561, 141, 7, 22, 11, 142, 21, 19, 43, 45, 52, 11, 82, 61, 12, 25, 46, 36, 14, 25, 49, 35, 3, 27, 18, 27, 1.4, 22.6, 4.9, 7.3, 44.1, 11.9, 2.2, 0.5, 0.8, 1.3, 32.3, 53.0, 17.8, 3.3, 2.5, 0.8],
    ["a10", "Meat meal", 952, 500, 425, 109, 71, 49, 115, 272, 17, 16, 38, 34, 37, 1, 63, 75, 8, 11, 29, 26, 7, 17, 44, 20, 0, 16, 10, 21, 2.9, 23.5, 2.2, 18.4, 29.1, 1.3, 0.2, 0.1, 0.0, 0.0, 45.9, 33.3, 1.8, 0.2, 0.1, 0.1],
    ["g1", "Wheat flour", 900, 915, 919, 946, 0, 0, 0, 0, 950, 920, 920, 990, 120, 400, 739, 605, 920, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 72, 320, 591, 484, 782, 782, 54, 0, 0, 12, 66, 42, 20, 752, 417, 131, 253],
    ["g3", "Dehulled lupins", 950, 950, 920, 920, 0, 0, 0, 0, 0, 0, 110, 0, 210, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 5, 0, 0, 0, 294, 0, 16, 32, 7, 68, 0, 0, 403, 920],
    ["g5", "Wheat gluten", 0, 0, 0, 0, 950, 950, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 19, 21, 19.7, 23, 23, 13, 0, 0, 10, 14, 20, 16, 20.7, 20.7, 8],
    ["g9", "Soy protein concentrate", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 12, 19, 25, 0, 0, 0, 0, 0, 5, 39, 26, 41, 0, 0, 0],
    ["p5", "Methionine", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 40, 25, 72, 0, 0, 0, 0, 0, 3, 1, 20, 10, 0, 0, 0],
    ["p6", "Lysine", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 31, 83, 299, 116, 0, 0, 0, 0, 0, 4, 15, 25, 25, 0, 0, 0],
    ["p11", "Vit Min Pmx", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 9, 13, 14, 0, 0, 0, 0, 0, 3, 14, 28, 26, 0, 0, 0],
    ["p12", "Phosphate 21%", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 24, 53, 46, 0, 0, 0, 0, 0, 4, 18, 11, 39, 0, 920, 0],
    ["p13", "Yttrium oxide", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 4, 9, 4, 0, 0, 0, 0, 0, 5, 15, 17, 11, 0, 0, 0],
    ["p15", "Fish oil", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 5, 7, 0, 0, 0, 0, 0, 4, 15, 17, 20, 0, 0, 0]
];

?>
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
            <tbody>
                <?php for($i = 1; $i < count($data); $i++): ?>
                    <tr>
                        <td class="p-3"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                        <td class="p-3"><?php echo $data[$i][0]; ?></td>
                        <td class="p-3"><?php echo $data[$i][1]; ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
        <!-- Overflow Table -->
        <div class="overflow-auto" style="flex: 1;">
            <table class="table" id="overflowTable">
                <thead>
                    <tr>
                        <?php for($i = 2; $i < count($data[0]); $i++): ?>
                            <th class="p-3 align-middle" scope="col"><?php echo $data[0][$i]; ?></th>
                        <?php endfor; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i = 1; $i < count($data); $i++): ?>
                        <tr>
                            <?php for($j = 2; $j < count($data[$i]); $j++): ?>
                                <td class="p-3"><?php echo $data[$i][$j]; ?></td>
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                </tbody>
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

<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>