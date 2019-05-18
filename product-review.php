<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel = 'stylesheet' type = 'text/css' href='./css/product-review.css'>
    <title>Rating/ Masoko</title>
    <script src = './js/review.js'></script>
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="index.php" class="navbar-brand">
            <img style= 'height : 50%; width : 50%;'class = 'img-fluid' src="https://www.masoko.com/media/logo/stores/1/masoko_fest_logo.png" alt="IMG-LOGO" loading = 'lazy'>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class = 'collapse navbar-collapse' id = 'navbarDropdown'>
            <div id= 'center-nav' class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class = 'd-sm-none  d-lg-block'>
            <a href="#">
                <img src="images/icons/icon-header-01.png" class="d-inline-block align-top" alt="ICON" loading = 'lazy' >
            </a>
        </div>
        
    </nav>
    <div class="container">
        <h1>Product Review</h1>
        <p class = 'text-center lead'>Please rate the quality of ${product_name} to assist other shoppers during future purchases.</p>
        <form action="">
            <div class="container">
                <ul class= 'text-center list-inline' id= 'star-group'>
                    <li id= 'star-1'  onmouseover =' startHover(this)' onmouseout ='endHover(this)' data ='1' onClick= 'setRatingHandler(this)' class="star list-inline-item ">&#9733</li>
                    <li id= 'star-2'  onmouseover = 'startHover(this)' onmouseout ='endHover(this)' data ='2' onClick= 'setRatingHandler(this)' class="star list-inline-item">&#9733</li>
                    <li id= 'star-3'  onmouseover = 'startHover(this)' onmouseout ='endHover(this)' data ='3' onClick= 'setRatingHandler(this)' class="star list-inline-item">&#9733</li>
                    <li id= 'star-4'  onmouseover = 'startHover(this)' onmouseout ='endHover(this)' data ='4' onClick= 'setRatingHandler(this)' class="star list-inline-item">&#9733</li>
                    <li id= 'star-5'  onmouseover = 'startHover(this)' onmouseout ='endHover(this)' data ='5' onClick= 'setRatingHandler(this)' class="star list-inline-item">&#9733</li>
                
                </ul>
                <div class = 'text-center'>
                    <button type = 'submit' class = 'btn btn-primary'>Submit</button>
                </div>
                
            </div>
        </form>
    </div>
</body>
</html>