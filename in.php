<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Items</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="area">
            <div class="row1">
                <div class="name">
                    <h1>F O D D I E $ P O T</h1>
                </div>
                <div class="search-item">
                    <input type="text" placeholder="Search for the item">
                    <button>Submit</button>
                </div>
            </div>
            <div class="row2">
                <div class="opt">
                    <p>Fish</p>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="opt">
                    <p>Crab</p>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="opt">
                    <p>Lollypop</p>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="opt">
                    <p>Veg</p>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="opt">
                    <p>Pizza</p>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="opt">
                    <p>Chicken</p>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="opt">
                    <p>Drinks</p>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="opt">
                    <p>Mutton</p>
                    <i class="fa-solid fa-plus"></i>
                </div>
            </div>
            <div class="row3">
                <form action="fetch_data.php" method="post" enctype="multipart/form-data">
                    <!-- Popular Food -->
                    <div class="sr1">
                        <div class="sr11">
                            <h1>Popular Food</h1>
                            <p>Explore More</p>
                        </div>
                        <div class="sr12">
                            <?php for ($i = 1; $i <= 4; $i++): ?>
                                <div class="col">
                                    <div class="card" name="<?php echo $i; ?>">
                                        <p class="rating">4.7*</p>
                                        <img class="card-img-top" src="./POPULAR/<?php echo $i; ?>.png" alt="item name">
                                        <div class="card-body">
                                            <h5 class="card-title">Biriyani</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <h3>500/-</h3>
                                            <input type="text" name="rating[<?php echo $i; ?>]" value="4.7*">
                                            <input type="text" name="image_path[<?php echo $i; ?>]" value="./POPULAR/<?php echo $i; ?>.png">
                                            <input type="text" name="item_name[<?php echo $i; ?>]" value="Biriyani">
                                            <input type="text" name="description[<?php echo $i; ?>]" value="Some quick example text...">
                                            <input type="text" name="price[<?php echo $i; ?>]" value="500/-">
                                            <input type="hidden" name="category[<?php echo $i; ?>]" value="popular">
                                            <a href="#" class="btn btn-primary cart"><i class="fa-solid fa-cart-plus"></i></a>
                                            <a href="#" class="btn btn-primary">BUY</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>

                    <!-- ... Repeat similar blocks for other categories ... -->
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
