<?php
    include 'custom-header.php';
?>
    <div class="container review-container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class = 'text-center review-header'>Product Review</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class= 'text-center'>
                            <img src="https://www.masoko.com/media/catalog/product/cache/small_image/240x300/beff4985b56e3afdbeabfc89641a4582/f/0/f00075.jpg" class='img-fluid' alt="IMG-PRODUCT" loading='lazy'>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12 text-center">
                        <span>${product_name}</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 rating-column">
                <p class = 'text-center lead'>Please rate the quality of ${product_name} to assist other shoppers during future purchases.</p>
                <form class= action="">
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
        </div>
    </div>
    <?php include 'custom-footer.php'?>
</body>
</html>