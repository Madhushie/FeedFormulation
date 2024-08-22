<?php
if(file_exists("install/index.php")){
	//perform redirect if installer files exist
	//this if{} block may be deleted once installed
	header("Location: install/index.php");
}

require_once 'users/init.php';
if(isset($user) && $user->isLoggedIn()){
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Feed Formulation Portal</title>
    <meta name="author" content="By Raveel">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
			<a href="<?=$us_url_root?>" style="text-decoration: none; color: white;">
				<span class="navbar-brand mb-0 h1" style="color: rgb(6, 110, 6);">Home</span>
			</a>
            </div>
          </nav>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Ingredients</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Feeds</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Account
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?=$us_url_root?>users/join.php">Sign up</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="<?=$us_url_root?>users/login.php">Log In</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="p-3 mb-2 bg-success text-white">
        <div class="container">
            <h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Feed Formulation Portal</h1>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Create feeds of your choice</p>
        </div>
      </div>
      <img src="usersc/images/feed.jpg" class="d-block w-100" alt="nutrientsPic">
      <div class="p-3 mb-2 text-black">
        <div class="container">
            <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: rgb(6, 110, 6);">Feed Portal</h2>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                Welcome to our Feed Portal, a powerful tool designed to revolutionize how academics and researchers formulate nutritional feeds for various species.
                 Created from our extensive research and expertise, this platform transcends the limitations of traditional methods, such as providing you ingredients, offering dynamic data visualizations, interactive tools for fine-tuning feed formulations,
                  and a seamless way to share your findings with colleagues around the globe.
                 Join us in advancing nutrition research with precision and collaboration at its core.
                Sign up with us and design formulas or feeds,
                 optimize recipes and get to know the proportions of the nutrients in your feeds. </p>
        </div>
      </div>
      <div class="p-3 mb-2 text-black">
        <div class="container">
            <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: rgb(6, 110, 6);">Key Features</h2>
        </div>
      </div>

      <div id="Info" class="p-3 mb-2 bg-body-secondary">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
                <img src="usersc/images/greenTick.jpg" alt="Switzerland" class="img-fluid rounded-circle" style="max-width: 100px;">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <p class="lead" >Ingredients and feed management</p>
          </div>
        </div>
      </div>
      <br>
      <div class="p-3 mb-2 bg-body-secondary">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
            </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <p class="lead" >Advanced Feed formulation</p>
        </div>
        <div class="col-md-2">
        </div>
          <div class="col-md-2 col-sm-2 col-xs-12">
                <img src="usersc/images/greenTick.jpg" alt="greenTick" class="img-fluid rounded-pill" style="max-width: 100px;">
            </div>
        </div>
      </div>
        <br>
      <div id="Info" class="p-3 mb-2 bg-body-secondary">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
                <img src="usersc/images/greenTick.jpg" alt="greenTick" class="img-fluid rounded-circle" style="max-width: 100px;">
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <p class="lead" >Comprehensive Database</p>
          </div>
        </div>
      </div>
      <br>
      <div class="p-3 mb-2 bg-body-secondary">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
            </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <p class="lead" >Secure Data Management</p>
        </div>
        
        <div class="col-md-2">
        </div>
          <div class="col-md-2 col-sm-2 col-xs-12">
                <img src="usersc/images/greenTick.jpg" alt="greenTick" class="img-fluid rounded-pill" style="max-width: 100px;">
            </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">

      </script>
</body>
</html>

<?php  languageSwitcher();?>


<!-- Place any per-page javascript here -->
<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>
