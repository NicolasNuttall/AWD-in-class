<!DOCTYPE html>
<html>
    <head>
        <script src="./js/scripts-vendor.min.js"></script>
        <script src="./js/scripts.min.js"></script>
        <script>home.init();</script>
        <script src="https://use.fontawesome.com/5752392d99.js"></script>      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">           
        <link href="./node_modules/@glidejs/glide/dist/css/glide.core.min.css" rel="stylesheet">
        <link href="./node_modules/@glidejs/glide/dist/css/glide.theme.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,400&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recipies | Simplecook </title>
    </head>
    <body class="page-{$view_name}">
        <header>
            <div class="page-header-top container text-center text-md-left">
                <a href="index.php"><img src="./images/logo.jpg" alt="StudentEat"/></a>
            </div>
            <nav class="navbar navbar-expand-lg">           
                <div class="container">                  
                    <button class="navbar-toggler" type="button" data-toggle="collapse"data-target="#navbar"aria-controls="navbar"aria-expanded="false"aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>   
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?p=categories">Categories</a>   
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?p=login">Login/Register</a>   
                            </li>
                        </ul>
                        <form action="search.php" method="get" class="form-inline my-2 my-lg-2">
                            <input class="form-control mr-sm-2" type="search"placeholder="Search"aria-label="Search">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            {block name="body"}{/block}
            
        </div>
        <footer class="container mt-4 text-center">
            <p>&copy;StudentEat - Created for educational purposes</p>
        </footer>
        
    </body>
</html>
