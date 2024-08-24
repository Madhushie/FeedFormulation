<?php
require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if (!securePage($_SERVER['PHP_SELF'])) {
    die();
}
?>

<head>
    <title>Add New Ingredient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid py-5" style="max-width: 70%;">
        <div class="bg-light rounded-4 p-5">
            <h1 class="mb-4">Ingredients > Add New Ingredient</h1>
            <form action="#" method="POST">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                General Information
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label for="ingredient_name" class="form-label">Ingredient Name</label>
                                    <input type="text" id="ingredient_name" name="ingredient_name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="ingredient_code" class="form-label">Ingredient Code</label>
                                    <input type="text" id="ingredient_code" name="ingredient_code" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Nutritional Values - 1
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label for="dry_matter" class="form-label">Dry Matter</label>
                                    <input type="number" id="dry_matter" name="dry_matter" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="crude_protein" class="form-label">Crude Protein</label>
                                    <input type="number" id="crude_protein" name="crude_protein" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Nutritional Values - 2
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label for="digestible_protein" class="form-label">Digestible Protein</label>
                                    <input type="number" id="digestible_protein" name="digestible_protein" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="total_lipid" class="form-label">Total Lipid</label>
                                    <input type="number" id="total_lipid" name="total_lipid" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Nutritional Values - 3
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label for="carbohydrate" class="form-label">Carbohydrate</label>
                                    <input type="number" id="carbohydrate" name="carbohydrate" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="total_phosphorus" class="form-label">Total Phosphorus</label>
                                    <input type="number" id="total_phosphorus" name="total_phosphorus" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary">Add Ingredient</button>
                    <button type="button" class="btn btn-secondary ms-2" onclick="window.location.href='#'">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>
