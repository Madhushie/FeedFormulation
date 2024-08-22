<?php
require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if (!securePage($_SERVER['PHP_SELF'])) {
    die();
}
?>

<head>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/getAllFeedsHandler.js"></script>
</head>

<body>
    <main class="container my-5">
        <h1 class="mb-4">Feeds</h1>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <input type="text" class="form-control w-25" placeholder="Search">
            <div>
                <button class="btn btn-primary me-2">Add Feed</button>
                <button class="btn btn-outline-secondary">Sort by ▼</button>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>Code</th>
                        <th>Feed Name</th>
                        <th>Species</th>
                        <th>Ingredients</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-end align-items-center">
            <span>Items per page:</span>
            <select class="form-select w-auto mx-2">
                <option>10</option>
                <option>20</option>
                <option>30</option>
            </select>
            <span>1-4 of 10</span>
            <button class="btn btn-outline-secondary ms-3">←</button>
            <button class="btn btn-outline-secondary ms-2">→</button>
        </div>
    </main>
</body>

<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>
