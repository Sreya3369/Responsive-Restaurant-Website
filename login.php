<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="check.php" method="post" enctype="multipart/form-data">
        <div class="area">
            <div class="input-field">
            <?php if (isset($_GET['email'])) { ?>
                            <input type="text" name="email" placeholder="Enter Email" value="<?php echo $_GET['email']; ?>"><br>
                    <?php } else { ?>
                            <input type="text" name="email" placeholder="email"><br>
                    <?php } ?>

                    <input type="password" name="password" placeholder="Password"><br>
            </div>
            <div class="log-in">
                <button type="submit" name="submit">LOG IN</button>
            </div>
            <div class="log-in">
                <p>Doesn't Have an Account!</p>
                <button><a href="index.php">SIGN UP</a></button>
            </div>
        </div>
    </form>
    </div>
</body>
</html>