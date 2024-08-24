<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>card</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
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
                <!-- Your existing content here -->

                <!-- PHP code to fetch data from the database -->
                <?php
                include "db_connect.php";

                $sql = "SELECT item_name, image, description, price, rating FROM popular";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <!-- Dynamic content for each item -->
                        <div class="col">
                            <div class="card" name="1">
                                <p class="rating"><?php echo $row['rating']; ?>*</p>
                                <img class="card-img-top" src="<?php echo $row['image']; ?>"
                                    alt="<?php echo $row['item_name']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['item_name']; ?></h5>
                                    <p class="card-text"><?php echo $row['description']; ?></p>
                                    <h3><?php echo $row['price']; ?>/-</h3>
                                    <a href="#" class="btn btn-primary cart"><i class="fa-solid fa-cart-plus"></i></a>
                                    <a href="#" class="btn btn-primary">BUY</a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>
                <!-- End of PHP code -->

            </div>
        </div>
    </div>
</body>

</html>
