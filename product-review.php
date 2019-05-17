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
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="index.php" class="navbar-brand">
            <img style= 'height : 50%; width : 50%;'class = 'img-fluid' src="https://www.masoko.com/media/logo/stores/1/masoko_fest_logo.png" alt="IMG-LOGO">
        </a>
        <span class="navbar-text">
        </span>
    </nav>
    <div class="container">
        <h1>Span</h1>
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