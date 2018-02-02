<head>   
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit:400,500" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head> 
<?php
global $base_path;
drupal_add_css(drupal_get_path('theme', 'matcher') . '/css/normalize.css');
drupal_add_css(drupal_get_path('theme', 'matcher') . '/slick/slick.css');
drupal_add_css(drupal_get_path('theme', 'matcher') . '/css/slick/slick-theme.css');
drupal_add_css(drupal_get_path('theme', 'matcher') . '/css/bootstrap.min.css');
drupal_add_css(drupal_get_path('theme', 'matcher') . '/css/styles.css');
drupal_add_js(drupal_get_path('theme', 'matcher') . '/js/popper.min.js');
drupal_add_js(drupal_get_path('theme', 'matcher') . '/js/bootstrap.min.js');
?> 

<nav class="navbar navbar-expand-md navbar-white fixed-top">
    <a class="navbar-brand" href="#"><img src="<?php print $base_path; ?>sites/all/themes/matcher/img/my-college-matcher-logo.png" width="250" height="52" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon">
            <i class="fas fa-bars"></i>  
        </span> </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
            <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>