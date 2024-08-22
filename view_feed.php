<?php
require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if (!securePage($_SERVER['PHP_SELF'])) {
    die();
}
?>

<head>
    <link rel="stylesheet" href="path/to/your/styles.css">
    <script src="js/getAllFeedHandler.js"></script>
</head>

<body>
    <header class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">LOGO</span>
            <nav class="navbar-nav d-flex flex-row">
                <a class="nav-link text-white" href="#">Dashboard</a>
                <a class="nav-link text-white" href="#">Ingredients</a>
                <a class="nav-link text-white active" href="#">Feeds</a>
                <a class="nav-link text-white" href="#">Species</a>
            </nav>
            <div class="d-flex align-items-center">
                <span class="text-white me-2">User Name</span>
                <span class="badge bg-secondary">Admin</span>
            </div>
        </div>
    </header>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>
